<?php

namespace App\Data;

use App\Enums\ProcessStatus;
use Illuminate\Database\Eloquent\Model;
use Spatie\LaravelData\Data;

/**
 * The parameters to execute a CoolifyTask, organized in a DTO.
 */
class CoolifyTaskArgs extends Data
{
    public function __construct(
        public string  $server_ip,
        public string  $private_key_location,
        public string  $command,
        public int     $port,
        public string  $user,
        public string  $type,
        public ?string $type_uuid = null,
        public ?Model  $model = null,
        public string  $status = ProcessStatus::QUEUED->value,
        public bool    $ignore_errors = false,
    ) {
    }
}
