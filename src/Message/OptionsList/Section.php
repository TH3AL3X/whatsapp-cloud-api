<?php

namespace terror\WhatsAppCloudApi\Message\OptionsList;

class Section
{
    protected $title;

    /** @var Row[] */
    protected $rows;

    public function __construct(string $title, array $rows)
    {
        $this->title = $title;
        $this->rows = $rows;
    }

    public function title(): string
    {
        return $this->title;
    }

    /**
     * @return Row[]
     */
    public function rows(): array
    {
        $result = [];

        foreach ($this->rows as $row) {
            $result[] = [
                'id' => $row->id(),
                'title' => $row->title(),
                'description' => $row->description() ?: null,
            ];
        }

        return $result;
    }
}
