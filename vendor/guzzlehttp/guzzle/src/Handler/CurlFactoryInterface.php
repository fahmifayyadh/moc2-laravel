<?php
<<<<<<< HEAD

=======
>>>>>>> parent of 31cfa1b1 (p)
namespace GuzzleHttp\Handler;

use Psr\Http\Message\RequestInterface;

interface CurlFactoryInterface
{
    /**
     * Creates a cURL handle resource.
     *
     * @param RequestInterface $request Request
     * @param array            $options Transfer options
     *
<<<<<<< HEAD
     * @throws \RuntimeException when an option cannot be applied
     */
    public function create(RequestInterface $request, array $options): EasyHandle;
=======
     * @return EasyHandle
     * @throws \RuntimeException when an option cannot be applied
     */
    public function create(RequestInterface $request, array $options);
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * Release an easy handle, allowing it to be reused or closed.
     *
     * This function must call unset on the easy handle's "handle" property.
<<<<<<< HEAD
     */
    public function release(EasyHandle $easy): void;
=======
     *
     * @param EasyHandle $easy
     */
    public function release(EasyHandle $easy);
>>>>>>> parent of 31cfa1b1 (p)
}
