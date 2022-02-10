<?php

namespace Illuminate\Queue;

use Opis\Closure\SerializableClosure as OpisSerializableClosure;

class SerializableClosure extends OpisSerializableClosure
{
    use SerializesAndRestoresModelIdentifiers;

    /**
     * Transform the use variables before serialization.
     *
<<<<<<< HEAD
     * @param  array  $data
=======
     * @param  array  $data The Closure's use variables
>>>>>>> parent of 31cfa1b1 (p)
     * @return array
     */
    protected function transformUseVariables($data)
    {
        foreach ($data as $key => $value) {
            $data[$key] = $this->getSerializedPropertyValue($value);
        }

        return $data;
    }

    /**
     * Resolve the use variables after unserialization.
     *
<<<<<<< HEAD
     * @param  array  $data
=======
     * @param  array  $data The Closure's transformed use variables
>>>>>>> parent of 31cfa1b1 (p)
     * @return array
     */
    protected function resolveUseVariables($data)
    {
        foreach ($data as $key => $value) {
            $data[$key] = $this->getRestoredPropertyValue($value);
        }

        return $data;
    }
}
