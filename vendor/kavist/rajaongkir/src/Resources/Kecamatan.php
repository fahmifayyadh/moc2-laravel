<?php

namespace Kavist\RajaOngkir\Resources;

use Kavist\RajaOngkir\HttpClients\AbstractClient;

class Kecamatan extends AbstractLocation
{
    /**
     * @param \Kavist\RajaOngkir\HttpClients\AbstractClient $httpClient
     */
    public function __construct(AbstractClient $httpClient)
    {
        $this->httpClient = $httpClient;
        $this->httpClient->setEntity('subdistrict');
        $this->httpClient->setHttpMethod('GET');
    }

    /**
     * @return self
     */
    public function setSearchColumn()
    {
        $this->searchDriver->setSearchColumn('subdistrict_name');

        return $this;
    }

    /**
     * @param int|string $kotaId
     * @return self
     */
    public function dariKota($kotaId): self
    {
        $this->result = $this->httpClient->request(['city' => $kotaId]);

        return $this;
    }
}
