<?php

require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/Toy.php';
require_once __DIR__ . '/Food.php';
require_once __DIR__ . '/Category.php';

$arrayFood = [
  new Food(0.5, 'Game and Duck', 'Soft', 8921, 'Delicius Game and Duck Food', 'Edgar Cooper', 'Food', 4, true, 'https://images.ctfassets.net/550nf1gumh01/3B5ne5A1VXJc62ofgBgexA/9985590f83a44fd35ae1201a0c6c8ddc/EC_TIN_400G_FOP_GAME_DUCK?fm=webp&q=80&w=1500'),
  new Food(0.5, 'Chicken and Jerky', 'Hard', 9783, 'Jucy Chicken Jerky Food', 'Edgar Cooper', 'Food', 6, true, 'https://images.ctfassets.net/550nf1gumh01/5E6JNw13fnJjG33FrgUc7m/0f9cd617a33760f9c7feda32a5cbaa3c/EC_DOG_ENGLISH_JERKY_CHICKEN_FRONT?fm=webp&q=80&w=1500'),
  new Food(20, 'Salmon', 'Hard', 4322, 'Brillant Atlantic Salmon Food', 'Edgar Cooper', 'Food', 30, true, 'https://images.ctfassets.net/550nf1gumh01/4yXBzDH1CH1W316VNFOCBy/d9b564e1ac7a508b154a08b44a247cce/EC_DOG_2?fm=webp&q=80&w=1500'),
  new Food(0.25, 'Turkey', 'soft', 666, 'Luscious Turkey', 'Edgar Cooper', 'Food', 2.5, true, 'https://images.ctfassets.net/550nf1gumh01/41uqtCMnTimwAGdjpmdktq/1d41543e18bd5072bf36b8589edc89fc/ECB770_1?fm=webp&q=80&w=1500')
];

$arrayToy = [
  new Toy('Small', 'Hard', 9003, 'Trident', 'Petsmart', 'Toys', 12.99, true, 'https://s7d2.scene7.com/is/image/PetSmart/5334637?$CLEARjpg$'),
  new Toy('Small', 'Hard', 3509, 'Bark', 'Petsmart', 'Toys', 8.99, true, 'https://s7d2.scene7.com/is/image/PetSmart/5331068?$CLEARjpg$'),
  new Toy('Small', 'Soft', 5046, 'Teething Bone', 'Petsmart', 'Toys', 13.99, true, 'https://s7d2.scene7.com/is/image/PetSmart/5324888?$CLEARjpg$'),
  new Toy('Medium', 'Soft/Hard', 7045, 'Nike Cortez', 'Petsmart', 'Toys', 79.99, true, 'https://www.sportsdirect.com/images/imgzoom/04/04111530_xxl.jpg')
];
