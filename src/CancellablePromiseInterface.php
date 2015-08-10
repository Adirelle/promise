<?php

namespace React\Promise;

interface CancellablePromiseInterface extends PromiseInterface
{
    /**
     * @return void
     */
    public function cancel();

    /**
     * @param callable $onCancel
     */
    public function cancelled(callable $onCancel);
}
