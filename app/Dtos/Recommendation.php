<?php

namespace App\Dtos;

class Recommendation
{
    public function __construct(
        public string $name,
        public string $slug,
        public string $linkedin,
        public string $title,
        public string $image,
        public array $body,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            $data['name'],
            $data['slug'],
            $data['linkedin'],
            $data['title'],
            $data['image'],
            $data['body'],
        );
    }

    public function summery(int $length = 200): string
    {
        return str(implode(' ', $this->body))->limit($length);
    }
}
