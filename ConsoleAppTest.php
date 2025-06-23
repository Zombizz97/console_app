<?php
use PHPUnit\Framework\TestCase;
require_once 'console_app.php';

class ConsoleAppTest extends TestCase
{
    private array $tests = [
        ["input" => "test", "expected" => "tset"],
        ["input" => "Mots plus compliqué", "expected" => "éuqilpmoc sulp stoM"],
    ];

    public function testReverseString()
    {
        foreach ($this->tests as $test) {
            // ETANT DONNE une chaine de caractères

            // QUAND on inverse la chaine
            $result = StringUtils::reverseString($test["input"]);

            // ALORS le résultat doit être la chaine inversée
            $this->assertStringContainsString($test["expected"], $result);
        }
    }

    public function testBonjourAtStart()
    {
        foreach ($this->tests as $test) {
            // ETANT DONNE une chaine de caractères

            // QUAND on inverse la chaine
            $result = StringUtils::reverseString($test["input"]);

            // ALORS le résultat doit commencer par "Bonjour"
            $this->assertStringStartsWith("Bonjour\n", $result);
        }
    }

    public function testAuRevoirAtEnd()
    {
        foreach ($this->tests as $test) {
            // ETANT DONNE une chaine de caractères

            // QUAND on inverse la chaine
            $result = StringUtils::reverseString($test["input"]);

            // ALORS le résultat doit finir par "Au revoir"
            $this->assertStringEndsWith("\nAu revoir", $result);
        }
    }

    public function testPalindrome()
    {
        // ETANT DONNE un palindrome
        $palindrome = 'ressasser';

        // QUAND on inverse la chaine
        $result = StringUtils::reverseString($palindrome);

        // ALORS le résultat contient le palindrome suivi de 'Bien dit !'
        $this->assertStringContainsString($palindrome . "\nBien dit !", $result);
    }

    public function testNoPalindrome()
    {
        // ETANT DONNE une chaine de caractères qui n'est pas un palindrome
        $nonPalindrome = 'test';

        // QUAND on inverse la chaine
        $result = StringUtils::reverseString($nonPalindrome);

        // ALORS le résultat ne doit pas contenir le mot 'Bien dit !'
        $this->assertStringNotContainsString("\nBien dit !", $result);
    }

    public function testWithSpecialCaracters()
    {
        // ETANT DONNE une chaine de caractères avec des caractères spéciaux
        $input = "t@st!ngé";

        // QUAND on inverse la chaine
        $result = StringUtils::reverseString($input);

        // ALORS le résultat doit être la chaine inversée
        $this->assertStringContainsString("égn!ts@t", $result);
    }
}
