<?php

namespace App\Helpers;
/**
 * Class with usefull functions for modern greek unicode text manipulation
 * @version 1.2
 * @author Petros Kyladitis <petros.kyladitis@gmail.com>
 * @copyright Copyright (c) 2013 - 2016, Petros Kyladitis
 * @license FreeBSD License <http://www.multipetros.gr/freebsd-license/>
 */
class El_Str{
    //
    // arrays for to_latin function usage
    //

    //mapping of greek letters that have the same latin representation
    protected $greek_to_latin_common_letters_dictionary = array(
        'Α' => "A", 'Β' => "B", 'Ε' => "E", 'Ζ' => "Z", 'Η' =>  "H", 'Ι' => "I" , 'Κ' => "K",
        'Μ' => "M", 'Ν' => "N", 'Ο' => "O", 'Ρ' => "P", 'Τ' => "T", 'Υ' => "Y", 'Χ' => "X"
    );

    //mapping of Latin letters that have the same Greek representation
    protected $latin_to_greek_common_letters_dictionary = array(
        'A' => "Α", 'B' => "Β", 'E' => "Ε", 'Z' => "Ζ", 'H' =>  "Η", 'I' => "Ι" , 'K' => "Κ",
        'M' => "Μ", 'N' => "Ν", 'O' => "Ο", 'P' => "Ρ", 'T' => "Τ", 'Y' => "Υ", 'X' => "Χ"
    );

    //difthongs
    protected $el_difthongs = array(
        'αι|αί','οι|οί','ου|ού','ει|εί','ντ','τσ','τζ','γγ','γκ','γχ','γξ','θ','χ','ψ',
        'ΑΙ|ΑΊ','ΟΙ|ΟΊ','ΟΥ|ΟΎ','ΕΙ|ΕΊ','ΝΤ','ΤΣ','ΤΖ','ΓΓ','ΓΚ','ΓΧ','ΓΞ','Θ','Χ','Ψ',
        'Αι|Αί','Οι|Οί','Ου|Ού','Ει|Εί','Ντ','Τσ','Τζ','Γγ','Γκ','Γχ','Γξ',
        'αΙ|αΊ','οΙ|οΊ','οΥ|οΎ','εΙ|εΊ','νΤ','τΣ','τΖ','γΓ','γΚ','γΧ','γΞ'
    ) ;
    protected $lat_difthongs = array(
        'ai','oi','ou','ei','nt','ts','tz','ng','gk','nch','nx','th','ch','ps',
        'AI','OI','OU','EI','NT','TS','TZ','NG','GK','NCH','NX','TH','CH','PS',
        'Ai','Oi','Ou','Ei','Nt','Ts','Tz','Ng','Gk','Nch','Nx',
        'aI','oI','oU','eI','nT','tS','tZ','nG','gK','nCH','nX'
    ) ;

    //*υ difthongs case, if followed by letters at pos 1-3 converted to *f, else to *v
    protected $el_spec_difthongs = array(
        '(α[υ|ύ])(?![α|ά|β|γ|δ|ε|έ|ζ|η|ή|λ|ι|ί|ϊ|ΐ|μ|ν|ο|ό|ρ|ω|ώ|Α|Ά|Β|Γ|Δ|Ε|Έ|Ζ|Η|Ή|Λ|Ι|Ί|Ϊ|Μ|Ν|Ο|Ό|Ρ|Ω|Ώ|])',
        '(ε[υ|ύ])(?![α|ά|β|γ|δ|ε|έ|ζ|η|ή|λ|ι|ί|ϊ|ΐ|μ|ν|ο|ό|ρ|ω|ώ|Α|Ά|Β|Γ|Δ|Ε|Έ|Ζ|Η|Ή|Λ|Ι|Ί|Ϊ|Μ|Ν|Ο|Ό|Ρ|Ω|Ώ|])',
        '(η[υ|ύ])(?![α|ά|β|γ|δ|ε|έ|ζ|η|ή|λ|ι|ί|ϊ|ΐ|μ|ν|ο|ό|ρ|ω|ώ|Α|Ά|Β|Γ|Δ|Ε|Έ|Ζ|Η|Ή|Λ|Ι|Ί|Ϊ|Μ|Ν|Ο|Ό|Ρ|Ω|Ώ|])',
        '(α[υ|ύ])',
        '(ε[υ|ύ])',
        '(η[υ|ύ])',
        '(Α[Υ|Ύ])(?![α|ά|β|γ|δ|ε|έ|ζ|η|ή|λ|ι|ί|ϊ|ΐ|μ|ν|ο|ό|ρ|ω|ώ|Α|Ά|Β|Γ|Δ|Ε|Έ|Ζ|Η|Ή|Λ|Ι|Ί|Ϊ|Μ|Ν|Ο|Ό|Ρ|Ω|Ώ|])',
        '(Ε[Υ|Ύ])(?![α|ά|β|γ|δ|ε|έ|ζ|η|ή|λ|ι|ί|ϊ|ΐ|μ|ν|ο|ό|ρ|ω|ώ|Α|Ά|Β|Γ|Δ|Ε|Έ|Ζ|Η|Ή|Λ|Ι|Ί|Ϊ|Μ|Ν|Ο|Ό|Ρ|Ω|Ώ|])',
        '(Η[Υ|Ύ])(?![α|ά|β|γ|δ|ε|έ|ζ|η|ή|λ|ι|ί|ϊ|ΐ|μ|ν|ο|ό|ρ|ω|ώ|Α|Ά|Β|Γ|Δ|Ε|Έ|Ζ|Η|Ή|Λ|Ι|Ί|Ϊ|Μ|Ν|Ο|Ό|Ρ|Ω|Ώ|])',
        '(Α[Υ|Ύ])',
        '(Ε[Υ|Ύ])',
        '(Η[Υ|Ύ])',
        '(Α[υ|ύ])(?![α|ά|β|γ|δ|ε|έ|ζ|η|ή|λ|ι|ί|ϊ|ΐ|μ|ν|ο|ό|ρ|ω|ώ|Α|Ά|Β|Γ|Δ|Ε|Έ|Ζ|Η|Ή|Λ|Ι|Ί|Ϊ|Μ|Ν|Ο|Ό|Ρ|Ω|Ώ|])',
        '(Ε[υ|ύ])(?![α|ά|β|γ|δ|ε|έ|ζ|η|ή|λ|ι|ί|ϊ|ΐ|μ|ν|ο|ό|ρ|ω|ώ|Α|Ά|Β|Γ|Δ|Ε|Έ|Ζ|Η|Ή|Λ|Ι|Ί|Ϊ|Μ|Ν|Ο|Ό|Ρ|Ω|Ώ|])',
        '(Η[υ|ύ])(?![α|ά|β|γ|δ|ε|έ|ζ|η|ή|λ|ι|ί|ϊ|ΐ|μ|ν|ο|ό|ρ|ω|ώ|Α|Ά|Β|Γ|Δ|Ε|Έ|Ζ|Η|Ή|Λ|Ι|Ί|Ϊ|Μ|Ν|Ο|Ό|Ρ|Ω|Ώ|])',
        '(Α[υ|ύ])',
        '(Ε[υ|ύ])',
        '(Η[υ|ύ])',
        '(α[Υ|Ύ])(?![α|ά|β|γ|δ|ε|έ|ζ|η|ή|λ|ι|ί|ϊ|ΐ|μ|ν|ο|ό|ρ|ω|ώ|Α|Ά|Β|Γ|Δ|Ε|Έ|Ζ|Η|Ή|Λ|Ι|Ί|Ϊ|Μ|Ν|Ο|Ό|Ρ|Ω|Ώ|])',
        '(ε[Υ|Ύ])(?![α|ά|β|γ|δ|ε|έ|ζ|η|ή|λ|ι|ί|ϊ|ΐ|μ|ν|ο|ό|ρ|ω|ώ|Α|Ά|Β|Γ|Δ|Ε|Έ|Ζ|Η|Ή|Λ|Ι|Ί|Ϊ|Μ|Ν|Ο|Ό|Ρ|Ω|Ώ|])',
        '(η[Υ|Ύ])(?![α|ά|β|γ|δ|ε|έ|ζ|η|ή|λ|ι|ί|ϊ|ΐ|μ|ν|ο|ό|ρ|ω|ώ|Α|Ά|Β|Γ|Δ|Ε|Έ|Ζ|Η|Ή|Λ|Ι|Ί|Ϊ|Μ|Ν|Ο|Ό|Ρ|Ω|Ώ|])',
        '(α[Υ|Ύ])',
        '(ε[Υ|Ύ])',
        '(η[Υ|Ύ])'
    ) ;
    protected $lat_spec_difthongs = array(
        'af','ef','if','av','ev','iv',
        'AF','EF','IF','AV','EV','IV',
        'Af','Ef','If','Av','Ev','Iv',
        'aF','eF','iF','aV','eV','iV'
    ) ;

    //μπ difthong case, inner word 'μπ' converted to 'mp', 'μπ' at word boundaries with 'b'
    protected $el_mp_difthong =  array(
        '\\Bμπ\\B','\\BΜΠ\\B','\\BΜπ\\B','\\BμΠ\\B',
        'μπ|μΠ','ΜΠ|Μπ'
    ) ;
    protected $lat_mp_difthong = array(
        'mp','MP','Mp','mP',
        'b','B'
    ) ;

    //one fthong letters convertions
    protected $el_letters = array(
        'α|ά','β','γ','δ','ε|έ','ζ','η|ή|ι|ί|ϊ|ΐ','κ','λ','μ','ν','ξ','ο|ό|ω|ώ','π','ρ','σ|ς','τ','υ|ύ|ϋ|ΰ','φ',
        'Α|Ά','Β','Γ','Δ','Ε|Έ','Ζ','Η|Ή|Ι|Ί|Ϊ|ΐ','Κ','Λ','Μ','Ν','Ξ','Ο|Ό|Ω|Ώ','Π','Ρ','Σ|ς','Τ','Υ|Ύ|Ϋ|ΰ','Φ'
    ) ;
    protected $lat_letters = array(
        'a','v','g','d','e','z','i','k','l','m','n','x','o','p','r','s','t','y','f',
        'A','V','G','D','E','Z','I','K','L','M','N','X','O','P','R','S','T','Y','F'
    ) ;

    protected $greek_letters_common_with_latin_alphabet = array(
        'Α', 'Β', 'Ε', 'Ζ', 'Η', 'Ι', 'Κ', 'Μ', 'Ν', 'Ο', 'Ρ', 'Τ', 'Υ', 'Χ'
    );

    protected $latin_letters_common_with_greek_alphabet = array(
        'A', 'B', 'E', 'Z', 'H', 'I', 'K', 'M', 'N', 'O', 'P', 'T', 'Y', 'X'
    );

    //
    // arrays for accent replacements usage
    //
    protected $upper_accent_letters = array('Ά','Έ','Ή', 'Ί|Ϊ', 'Ό', 'Ύ|Ϋ', 'Ώ') ;
    protected $upper_no_accent_letters = array('Α','Ε','Η', 'Ι', 'Ο', 'Υ', 'Ω') ;
    protected $lower_accent_letters = array('ά','έ','ή', 'ί|ϊ|ΐ', 'ό', 'ύ|ϋ|ΰ', 'ώ') ;
    protected $lower_no_accent_letters = array('α','ε','η', 'ι', 'ο', 'υ', 'ω') ;

    /**
     * Check if $char is upper case
     * @param string $char character for checking
     * @param bool $notGreekException throw exception if char is not greek
     * @return bool true if $char is upper case, else false
     * @throws Exception if $notGreekException is true and not $char is not modern greek
     */
    public function is_upper($char, $notGreekException = false){
        //from variable $char, get only the first character (in case of giving string).
        $char = mb_substr($char, 0, 1, 'UTF-8') ;
        if($notGreekException){
            if(($char < 'Ά') || ($char > 'ώ')){
                // Modern greek unicode chars start from hex 0386 (CAPITAL ALPHA WITH TONOS) until
                // hex 03CE (SMALL OMEGA WITH TONOS). So, outside of this range considers as non greek char.
                throw new Exception("$char is not a Greek unicode letter") ;
            }
        }
        // ά (hex 03AC) is the border between upper and lower case chars,
        // ecxept ΐ (hex 0390) who is positioned between capitals (.-Ώ-ΐ-Α-.)
        // so, check for this letter, else return T/F by ά positioned
        if($char == 'ΐ')
            return true ;
        return $char < 'ά' ? true : false ;
    }

    /**
     * Check if $char is lower case
     * @param string $char character for checking
     * @param bool $notGreekException throw exception if char is not greek
     * @return true if $char is lower case, else false
     */
    public function is_lower($char, $notGreekException = false){
        //call is_upper function and reverse the returned value
        return $this->is_upper($char, $notGreekException) ? false : true ;
    }

    /**
     * Convert greek letters at the string to latins, as ISO:843 defines
     * @param string $str string to convert
     * @return string converted string
     */
    public function to_latin($str){
        //do regex replacements, starting from difthongs, 1-fthong letters at the end
        $str = $this->replace_letters($this->el_difthongs, $this->lat_difthongs, $str) ;
        $str = $this->replace_letters($this->el_mp_difthong, $this->lat_mp_difthong, $str) ;
        $str = $this->replace_letters($this->el_spec_difthongs, $this->lat_spec_difthongs, $str) ;
        $str = $this->replace_letters($this->el_letters, $this->lat_letters, $str) ;

        return $str ;
    }

    /**
     * Replace the letters of a string defined at the 1st array, with letters defined at the 2nd array
     * (for example, 1st array:['a','b'] - 2nd array:['y','z'] - string: "abstract" => "yzstryct")
     * @param array $current_letters_array character for checking
     * @param array $become_letters_array throw exception if char is not greek
     * @param string $str string to do the replacements
     * @return string with replaced letters
     */
    private function replace_letters($current_letters_array, $become_letters_array, $str){
        //set utf-8 encoding for regullar expersions
        mb_regex_encoding('UTF-8') ;
        //for each letter in convertion arrays, do a regex replacement at the string
        for($i = 0; $i < count($current_letters_array); $i++){
            $str = mb_ereg_replace($current_letters_array[$i], $become_letters_array[$i], $str) ;
        }
        return $str ;
    }

    /**
     * Convert unicode string to lower case, without accent marks for the greek letters
     * @param string $str string to lower case convert
     * @return string converted string
     */
    public function strtolower_no_accent($str){
        //convert unicode string to lower, and then replace accent marked letters with no accent
        $str = mb_strtolower($str, 'UTF-8') ;
        $str = $this->replace_letters($this->lower_accent_letters, $this->lower_no_accent_letters, $str) ;
        return $str ;
    }

    /**
     * Remove accent marks for the greek letters at passed unicode string (no any case convertion)
     * @param string $str string to remove greek accent marks only
     * @return string converted string
     */
    public function str_no_accent($str){
        $str = $this->replace_letters($this->upper_accent_letters, $this->upper_no_accent_letters, $str) ;
        $str = $this->replace_letters($this->lower_accent_letters, $this->lower_no_accent_letters, $str) ;
        return $str ;
    }

    /**
     * Convert unicode string to upper case, without accent marks for the greek letters
     * @param string $str string to upper case convert
     * @return string converted string
     */
    public function strtoupper_no_accent($str){
        //convert unicode string to upper, and then replace accent marked letters with no accent
        $str = mb_strtoupper($str, 'UTF-8') ;
        $str = $this->replace_letters($this->upper_accent_letters, $this->upper_no_accent_letters, $str) ;
        return $str ;
    }

    /**
     * Remove accent marks from greek letters and then convert to upper case
     * @param string $str string to remove greek accent marks only
     * @return string converted string
     */
    public function str_no_accent_to_upper($str){
        // first replace the accented letters
        $str = $this->str_no_accent($str);
        // convert unicode string to upper, and then replace accent marked letters with no accent
        $str = mb_strtoupper($str, 'UTF-8') ;
        $str = $this->replace_letters($this->upper_accent_letters, $this->upper_no_accent_letters, $str) ;
        return $str ;
    }

    /**
     * Replace greek alphabet letters that have common representation in the latin alphabet(e.g. A)
     * @param string $str string to replace greek letters with their latin representation
     * @return string converted string
     */
    public function str_replace_common_greek_and_latin_letters($str){
        return strtr($str, $this->greek_to_latin_common_letters_dictionary);
    }

    /**
     * Check that the given string only contains Greek letters that are common in Greek and Latin alphabet and numbers.
     *
     * @param string $str
     * @return boolean $result
     */
    public function check_str_contains_only_greek_letters_common_with_latin_alphabet_and_numbers($str){
        $greek_letters_common_with_latin_alphabet = implode("", $this->greek_letters_common_with_latin_alphabet);
        $regex = '/^['.$greek_letters_common_with_latin_alphabet .'0-9]+$/';

        return preg_match($regex, $str);
    }

    /**
     * Check that the given string only contains Latin letters that are common in Greek and Latin alphabet and numbers.
     *
     * @param string $str
     * @return boolean $result
     */
    public function check_str_contains_only_latin_letters_common_with_greek_alphabet_and_numbers($str){
        $latin_letters_common_with_greek_alphabet = implode("", $this->latin_letters_common_with_greek_alphabet);
        $regex = '/^['.$latin_letters_common_with_greek_alphabet.'0-9]+$/';

        return preg_match($regex, $str);
    }

    /**
     * Replace Greek alphabet letters that have common representation in the Latin alphabet(e.g. A) with
     * their Latin representation.
     *
     * @param string $str string to replace Greek letters with their Latin representation
     * @return string converted string
     */
    public function str_replace_common_greek_to_latin_letters($str){
        return strtr($str, $this->greek_to_latin_common_letters_dictionary);
    }

    /**
     * Replace Latin alphabet letters that have common representation in the Greek alphabet(e.g. A) with
     * their Greek representation.
     *
     * @param string $str string to replace Latin letters with their Greek representation
     * @return string converted string
     */
    public function str_replace_common_latin_to_greek_letters($str){
        return strtr($str, $this->latin_to_greek_common_letters_dictionary);
    }
}
