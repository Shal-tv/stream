<?php

namespace App\DTO\Riot;

use App\DTO\Spotify\ItemDTO;

/**
 * Class UnitDTO
 *
 * @package App\DTO\Riot
 */
final class UnitDTO
{

    /**
     * @var int[]
     *
     * A list of the unit's items. Please refer to the Teamfight Tactics documentation for item ids.
     */
    private array $items;

    /**
     * @var string
     *
     * This field was introduced in patch 9.22 with data_version 2.
     */
    private string $characterId;

    /**
     * @var string
     *
     * If a unit is chosen as part of the Fates set mechanic, the chosen trait will be indicated by this field.
     * Otherwise, this field is excluded from the response.
     */
    private string $chosen;

    /**
     * @var string
     *
     * Unit name. This field is often left blank.
     */
    private string $name;

    /**
     * @var int
     *
     * Unit rarity. This doesn't equate to the unit cost.
     */
    private int $rarity;

    /**
     * @var int
     *
     * Unit tier.
     */
    private int $tier;

    /**
     * UnitDTO Constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return int[]
     */
    public function getItems() : array
    {
        return $this->items;
    }

    /**
     * @param int[]  $items
     */
    public function setItems(array $items) : void
    {
        $this->items = $items;
    }

    /**
     * @param ItemDTO  $item
     *
     * @return void
     */
    public function addItem(ItemDTO $item) : void
    {
        $this->items[] = $item;
    }

    /**
     * @return string
     */
    public function getCharacterId() : string
    {
        return $this->characterId;
    }

    /**
     * @param string  $characterId
     */
    public function setCharacterId(string $characterId) : void
    {
        $this->characterId = $characterId;
    }

    /**
     * @return string
     */
    public function getChosen() : string
    {
        return $this->chosen;
    }

    /**
     * @param string  $chosen
     */
    public function setChosen(string $chosen) : void
    {
        $this->chosen = $chosen;
    }

    /**
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }

    /**
     * @param string  $name
     */
    public function setName(string $name) : void
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getRarity() : int
    {
        return $this->rarity;
    }

    /**
     * @param int  $rarity
     */
    public function setRarity(int $rarity) : void
    {
        $this->rarity = $rarity;
    }

    /**
     * @return int
     */
    public function getTier() : int
    {
        return $this->tier;
    }

    /**
     * @param int  $tier
     */
    public function setTier(int $tier) : void
    {
        $this->tier = $tier;
    }

}
