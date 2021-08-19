<?php

$gender = "male"; // cinsiyet (male/female)
$weight = 55; // kilo (kg)
$height = 170; // boy (cm)
$age = 25; // yaş (sene)

$guess = "1470"; // Tahmin edilen değer

/**
 * Bu ödevde bazal metabolizma hesaplaması yapacağız.
 * Yukarıdaki değişkenleri ve aşağıdaki formülü kullanarak
 * kişinin günlük BMR ihtiyacını hesaplayıp
 * bunu ekrana yazan ve tahmin değeri ile karşılaştıran
 * PHP kodunu oluşturmamız gerekiyor.
 * 
 * Erkekler için; 88.362 + (13.397 x kilo) + (4.799 x boy) – (5.677 x yaş)
 * Kadınlar için; 447.593 + (9.247 x kilo) + (3.098 x boy) – (4.330 x yaş)
 * 
 * Tahmin değeri ile karşılaştırmanızın sonucunda
 * "Tahmin değerinden düşük", "Tahmin değerinden büyük" veya
 * "Tahmin değerine eşit" şeklinde çıktı vermeniz gerekiyor.
 * 
 * Örneğin;
 * $gender = "female";
 * $weight = 60;
 * $height = 170;
 * $age = 30;
 * 
 * Ekrana
 * 
 * BMR: 1399.173
 * Tahmin değerinden düşük
 * 
 * yazması gerekiyor.
 */

$femaleBasicValue = 447.593;
$femaleWeightRate = 9.247;
$femaleHeightRate = 3.098;
$femaleAgeRate = 4.330;

$maleBasicValue = 88.362;
$maleWeightRate = 13.397;
$maleHeightRate = 4.799;
$maleAgeRate = 5.677;

# Let's clarify which variable takes to which value

$basicValue = ${$gender . "BasicValue"};
$weightRate = ${$gender . "WeightRate"};
$heightRate = ${$gender . "HeightRate"};
$ageRate = ${$gender . "AgeRate"};

$bmr = $basicValue + ($weightRate * $weight) + ($heightRate * $height) - ($ageRate * $age);

# Compare between guess and BMR

if ($bmr == $guess)
    echo "Tahmin değerine eşit";
elseif ($bmr > $guess)
    echo "Tahmin değerinden büyük";
elseif ($bmr < $guess)
    echo "Tahmin değerinden küçük";
