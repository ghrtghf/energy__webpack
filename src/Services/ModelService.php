<?php

namespace App\Services;

use App\Kernel\Database\DatabaseInterface;
use App\Kernel\Upload\UploadedFileInterface;
use App\Models\Model;

class ModelService
{
    public function __construct(
        private DatabaseInterface $db
    )
    {
    }

    public function store(string $name,int $price,string $description, UploadedFileInterface $image, int $station)
    {
        
        $filePath = $image->move('models');

        return $this->db->insert('models', [
            'name' => $name,
            'price' => $price,
            'description' => $description,
            'image' => $filePath,
            'station_id' => $station
        ]);
    }

    public function all(): array
    {
        $models = $this->db->get('models',[
            'is_delited' => 0
        ]);

        return array_map(function($models){
            return new Model(
                $models['id'],
                $models['name'],
                $models['price'],
                $models['description'],
                $models['image'],
                $models['station_id']
            );
        }, $models);
    }

    public function update(int $id, string $name, int $price, string $description, ?UploadedFileInterface $image, int $station_id): void
    {
        $data = [
            'name' => $name,
            'price' => $price,
            'description' => $description,
            'station_id' => $station_id,
        ];

        if ($image && ! $image->hasError()) {
            $data['image'] = $image->move('catalog');
        }

        $this->db->update('models', $data, [
            'id' => $id,
        ]);
    }

    public function destroy(int $id): void
    {
        $this->db->update('models', ['is_delited' => 1], [
            'id' => $id,
        ]);
    }

    public function find (int $id)
    {
        $model = $this->db->first('models', [
            'id' => $id,
        ]);

        if(! $model){
            return  null;
        }

        return new Model(
            id: $model['id'],
            name: $model['name'],
            price: $model['price'],
            description: $model['description'],
            image: $model['image'],
            station_id: $model['station_id'],
        );
    }
}