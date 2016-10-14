<?php
namespace Problems;

use NumberFormatter;

class Problem17NumberLetterCounts
{
    /**
     * @var NumberFormatter
     */
    private $numberFormatter;

    /**
     * Problem17NumberLetterCounts constructor.
     */
    public function __construct()
    {
        $this->numberFormatter = new NumberFormatter('en', NumberFormatter::SPELLOUT);
        $this->numberFormatter->setTextAttribute(NumberFormatter::DEFAULT_RULESET, "%spellout-numbering-verbose");
    }

    /**
     * @param int $number
     * @return int
     */
    public function getTotalWordsCountByNumber($number)
    {
        $count = 0;

        if ($number <= 0) {
            return $count;
        }

        for($i=1; $i<=$number; $i++) {
            $words = trim(str_replace(array("-", ' '), '', $this->numberFormatter->format($i)));
            $count += strlen($words);
        }

        return $count;
    }
}