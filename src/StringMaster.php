<?php

namespace StringMaster;

class StringMaster
{
    /**
     * Convertit la première lettre de chaque mot en majuscule.
     * Exemple : "hello world" devient "Hello World"
     */
    public static function capitalizeWords($str)
    {
        return ucwords($str);
    }

    /**
     * Convertit une chaîne de caractères en minuscules.
     */
    public static function toLowerCase($str)
    {
        return strtolower($str);
    }

    /**
     * Convertit une chaîne de caractères en majuscules.
     */
    public static function toUpperCase($str)
    {
        return strtoupper($str);
    }

    /**
     * Met en majuscule la première lettre de la chaîne.
     */
    public static function capitalizeFirstLetter($str)
    {
        return ucfirst($str);
    }

    /**
     * Remplace les espaces par des tirets.
     * Exemple : "hello world" devient "hello-world"
     */
    public static function replaceSpacesWithDashes($str)
    {
        return str_replace(' ', '-', $str);
    }
}
