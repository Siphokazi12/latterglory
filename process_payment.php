<?php

require 'vendor/autoload.php';

\Stripe\Stripe::setApiKey('sk_test_51PLpLwRpD1pZV8tL8Rpwonkr4EL2P89X15URvZWQTosvqyMcwyerNZMtD0kw6nhYLygVqNepq5aq725N3L13uH6j00FdvoRivO');

try {
    $charge = \Stripe\Charge::create([
        'amount' => 5000, // amount in cents
        'currency' => 'ZAR',
        'description' => 'Example charge',
        'source' => $_POST['stripeToken'],
    ]);

    echo "<div style='text-align: center; font-family: Arial, sans-serif;'>";
    echo "<h1 style='color: green;'>🎉 Payment successful! 🎉</h1>";
    echo "<p style='font-size: 18px;'>Thank you for your payment of R50!</p>";
    echo "<p style='font-size: 16px;'>Your transaction has been completed successfully.</p>";
    echo "<p style='font-size: 16px;'>Click the button below to return to the home page.</p>";
    echo "<button style='padding: 10px 20px; background-color: #007bff; color: #fff; border: none; border-radius: 5px; cursor: pointer; font-size: 16px;' onclick=\"window.location.href='/latterglory.html'\">Return to Home</button>";
    echo "</div>";

} catch (\Stripe\Exception\CardException $e) {
    echo "<div style='text-align: center; font-family: Arial, sans-serif;'>";
    echo "<h1 style='color: red;'>⚠️ Error: " . $e->getMessage() . "</h1>";
    echo "<p style='font-size: 16px;'>Unfortunately, your payment could not be processed at this time.</p>";
    echo "<p style='font-size: 16px;'>Please try again or contact support if the issue persists.</p>";
    echo "</div>";
}

?>
