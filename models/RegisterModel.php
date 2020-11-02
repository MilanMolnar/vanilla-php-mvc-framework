<?php


namespace app\models;

use app\core\Model;

/**
 * Class RegisterModel
 * @package app\models
 */

class RegisterModel extends Model
{
    public string $username;
    public string $fullName;
    public string $email;
    public string $password;
    public string $confirmPassword;

    public function register()
    {
        echo "creating new user";
    }

    public function rules(): array
    {
        return [
            'fullName' => [self::RULE_REQUIRED],
            'username' => [self::RULE_REQUIRED],
            'email' => [self::RULE_REQUIRED, self::RULE_EMAIL],
            'password' => [self::RULE_REQUIRED, [self::RULE_MIN, 'min' => '3'], [self::RULE_MAX, 'max' => '12']],
            'confirmPassword' => [self::RULE_REQUIRED, [self::RULE_MATCH, 'match' => 'password']]
        ];
    }
}