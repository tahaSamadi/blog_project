<?php namespace App\Models\trait;

trait date_slug{
    public function getformatTimeAttribute(){
        return (new Verta($this->created_at))->format('d F , Y');
    }
}
