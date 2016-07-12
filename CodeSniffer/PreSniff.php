<?php

abstract class PHP_CodeSniffer_PreSniff implements PHP_CodeSniffer_Sniff
{

    public abstract function register();
    public abstract function check(PHP_CodeSniffer_File $phpcsFile, $stackPtr);

    public function process(PHP_CodeSniffer_File $phpcsFile, $stackPtr) {

          if ($this->check($phpcsFile, $stackPtr)) {
               return null;
          } else {
               return count($phpcsFile->getTokens()) - 1;
          }
    }
}