<?php

namespace App\Http\Headers\Interest;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class InterestService
{
    protected $interests;

    public function __construct()
    {
        $this->interests=session()->get('interests') ?? collect([]);
    }

    public function put(array $values,object $object=null)
    {
        if (!is_null($object)){
            $values=array_merge($values,[
                'id'=>Str::random(10),
                'subject_id'=>$object->id,
                'subject_type'=>get_class($object)
            ]);
        }elseif (!isset($values['id'])){
            $values=array_merge($values,[
                'id'=>Str::random(10)
            ]);
        }
        $this->interests->put($values['id'],$values);
        session()->put('interests',$this->interests);

        return $this;
    }

    public function has($key)
    {
        if ($key instanceof Model){
            return ! is_null(
                $this->interests->where('subject_id',$key->id)->where('subject_type',get_class($key))->first()
            );
        }
        return ! is_null(
            $this->interests->where('id',$key)->first()
        );
    }

    public function get($key,$modelvalue=true){


        $item= $key instanceof Model ?
            $this->interests->where('subject_id',$key->id)->where('subject_type',get_class($key))->first():
            $this->interests->firstWhere('id',$key);

        return $modelvalue?$this->getModelValue($item):$item;
    }

    public function all(){
        return $this->interests->map(function ($item){
            return $this->getModelValue($item);
        })->collect();
    }


    public function update($key,$value)
    {
        $item=collect($this->get($key,false));
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



    public function delete($key)
    {
        if ($this->has($key)) {
            $this->interests=$this->interests->filter(function ($item)use($key){
                if ($key instanceof Model){
                    return ($key->id!=$item['subject_id']) || (get_class($key)!=$item['subject_type']);
                }

                return $item['id']!=$key;
            });
            session()->put('interests',$this->interests);

            return true;
        }

        return false;




    }

    public function getAll($key)
    {
        $item= $key instanceof Model ?
            $this->interests->where('subject_id',$key->id)->where('subject_type',get_class($key))->collect():
            $this->interests->where('id',$key)->collect();

        return $item->map(function ($item){
            return $this->getModelValue($item);
        })->collect();
    }
}
