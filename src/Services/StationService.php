<?php

namespace App\Services;

use App\Kernel\Database\DatabaseInterface;
use App\Models\Station;

class StationService
{
    public function __construct(
        private DatabaseInterface $db
    )
    {
        
    }
    /**
     * @return array<Station>
     */
    public function all():array
    {
        $stations = $this->db->get('stations');

        $stations = array_map(function($station){
            return new Station(
                id: $station['id'],
                name: $station['name'],
                body_protection: $station['body_protection'],
            );
        }, $stations);

        return $stations;
    }

    public function delete(int $id): void
    {
        $this->db->delete('stations',[
            'id' => $id,
        ]);
    }

    public function store (string $name, string $body_protection)
    {
        return $this->db->insert('stations',[
            'name' => $name,
            'body_protection' => $body_protection
        ]);
    }

    public function update(int $id, string $name, string $body_protection): void
    {
        $this->db->update('stations', [
            'name' => $name,
            'body_protection' => $body_protection,
        ], [
            'id' => $id,
        ]);
    }

    public function find (int $id)
    {
        $station = $this->db->first('stations', [
            'id' => $id,
        ]);

        if(! $station){
            return  null;
        }

        return new Station(
            id: $station['id'],
            name: $station['name'],
            body_protection: $station['body_protection'],
        );
    }
}