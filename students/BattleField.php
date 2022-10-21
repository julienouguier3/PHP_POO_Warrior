<?php

require_once __DIR__ . "/../base/BaseBattleField.php";
require_once "Warrior.php";


class BattleField extends BaseBattleField
{

    public static function createMyWarrior()
    {

        $warrior = new MarvelWarrior('Black Widow');
        $warrior->imageUrl = 'https://play-lh.googleusercontent.com/CxFeHWIo4gJQGQbloBYnG-vEB6zYV8brHjeP1fT5_DSqo0uv9LPSpOS45887hJeDdXkpSca-FOGX_XrkTg';
        $warriorWeapon = new Weapon(1, 100);
        $warriorWeapon->imageUrl = 'https://www.stock-armurerie.com/media/catalog/product/cache/4/image/9df78eab33525d08d6e5fb8d27136e95/a/j/aj110-5_1_1.jpg';
        $warrior->weapon = $warriorWeapon;

        $warrior->saveNew();

    }

    public static function createOtherWarrior()
    {

        $warrior2 = new PokemonWarrior('Pikachu');
        $warrior2->imageUrl = 'https://assets.stickpng.com/images/580b57fcd9996e24bc43c325.png';
        $warrior2Weapon = new Weapon (2, 250);
        $warrior2Weapon->imageUrl = 'https://www.margxt.fr/wp-content/uploads/2018/12/Pokemon-Go-Electrique.png';
        $warrior2->weapon = $warrior2Weapon;

        $warrior2->saveNew();
    }

    public static function createThirdWarrior()
    {
        $warrior3 = new StartrekWarrior("Spock");
        $warrior3->imageUrl = "https://figurines-pop.com/media/img/figurine/82-figurine-funko-pop-star-trek-spock.jpg";
        $warrior3Weapon = new Weapon (3, 65);
        $warrior3Weapon->imageUrl = "https://images.stockx.com/images/Diamond-Select-Toys-Star-Trek-The-Search-For-Spock-Klingon-Disruptor-Roleplay-Toy.jpg?fit=fill&bg=FFFFFF&w=480&h=320&fm=webp&auto=compress&dpr=2&trim=color&updated_at=1661736564&q=75";
        $warrior3->weapon = $warrior3Weapon;

        $warrior3->saveNew();
    }

}

