<?php

namespace App\Http\Headers\Cart;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class CartService
{
    protected $cart;

    public function __construct()
    {
        $this->cart=session()->get('cart') ?? collect([]);
    }

    public function put(array $value,$object=null)
    {
        if ( !is_null($object) && $object instanceof Model){
            $value=array_merge($value,[
                'id'=>Str::random(10),
                'subject_id'=>$object->id,
                'subject_type'=>get_class($object)
            ]);
        }elseif(! isset($value['id'])){

            $value=array_merge($value,[
                'id'=>Str::random(10),
            ]);

        }

        $this->cart->put($value['id'],$value);
        session()->put('cart',$this->cart);

        return $this;
    }


    public function has($key)
    {
        if ($key instanceof Model){
            return ! is_null(
                $this->cart->where('subject_id',$key->id)->where('subject_type',get_class($key))->first()
            );
        }
        return ! is_null(
            $this->cart->where('id',$key)->first()
        );
    }

    public function get($key,$modelvalue=true){


        $item= $key instanceof Model ?
            $this->cart->where('subject_id',$key->id)->where('subject_type',get_class($key))->first():
            $this->cart->firstWhere('id',$key);

        return $modelvalue?$this->getModelValue($item):$item;
    }



    public function all(){
        return $this->cart->map(function ($item){
            return $this->getModelValue($item);
        })->all();
    }


    public function update($key,$value)
    {
        $item=collect($this->get($key,false));
        if (is_numeric($value)){
            $item=$item->merge(
                [
                    'quantity'=>$item['quantity']+$value
                ]
            );
        }
        if (is_array($value)){
            foreach ($value as $key=>$i){
                $item=$item->merge([
                    $key=>$i
                ]);
            }
        }




        $this->put($item->toArray());
        return $this;
    }

    protected function getModelValue($item)
    {

        if (isset($item['subject_type']) && isset($item['subject_id'])){
            $class=$item['subject_type'];
                $item[strtolower(class_basename($class))]=(new $class())->find($item['subject_id']);
                unset($item['subject_type']);
                unset($item['subject_id']);
                return $item;

        }
        return $item;

    }

    public function count($key)
    {
        if (!$this->has($key)) return 0 ;
        return $this->get($key)['quantity'];
    }

    public function delete($key)
    {
        if ($this->has($key)) {
            $this->cart=$this->cart->filter(function ($item)use($key){
                if ($key instanceof Model){
                    return ($key->id!=$item['subject_id']) || (get_class($key)!=$item['subject_type']);
                }

                return $item['id']!=$key;
            });
            session()->put('cart',$this->cart);

            return true;
        }

        return false;




    }



}
