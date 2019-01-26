<?php
/**
 * Created by PhpStorm.
 * User: anuj
 * Date: 21/01/19
 * Time: 7:18 PM
 */


$car_value = $_POST['car_value'];
$taxPercentage= $_POST['tax'];
$tenure= $_POST['tenure'];
$basePolicyPrice = 0;
$timestamp = time();
$basePolicyPriceInstallment = [];
$commissionInstallment = [];
$taxInstalment = [];
$totalInst = [];
$basePolicyPricePer = 0;

if (isset($_POST['car_value']) && isset($_POST['tax']))
{
    if(date('D', $timestamp) === 'Fri' && (date('H',$timestamp) >= 15 && date('H',$timestamp) <= 20))
    {
        $basePolicyPricePer = 13;
        $basePolicyPrice = $car_value * (13/100);
    }else
    {
        $basePolicyPricePer = 11;
        $basePolicyPrice = $car_value * (11/100);
    }

    $commission =  $basePolicyPrice*(17/100);

    $tax = $basePolicyPrice*($taxPercentage/100);

    for($i = 0; $i < $tenure; $i++)
    {
        $policyInt = $basePolicyPrice / $tenure;
        $basePolicyPriceInstallment[$i] = round($policyInt,2);

        $commInt = $commission/$tenure;
        $commissionInstallment[$i] = round($commInt,2);

        $taxInt = $tax/$tenure;
        $taxInstalment[$i] = round($taxInt,2);

        $total = $policyInt+$commInt+$taxInt;
        $totalInst[$i] = round($total,2);

    }

    $result = [
        'car_value' => round($car_value,2),
        'tax_per' => $taxPercentage,
        'base_policy' => round($basePolicyPrice,2),
        'commission' => round($commission,2),
        'base_policy_per' => $basePolicyPricePer,
        'base_policy_inst' => $basePolicyPriceInstallment,
        'commission_inst' => $commissionInstallment,
        'tax_inst' => $taxInstalment,
        'total_inst' => $totalInst,
        'total_tax' => round($tax),
        'total' => array_sum($totalInst)
    ];
    print_r(json_encode($result));die;

}
