<?php
 

namespace FontLib\TrueType;

use FontLib\Table\DirectoryEntry;

/**
 * TrueType table directory entry.
 *
 * @package php-font-lib
 */
class TableDirectoryEntry extends DirectoryEntry {
  function __construct(File $font) {
    parent::__construct($font);
  }

  function parse() {
    parent::parse();

    $font           = $this->font;
    $this->checksum = $font->readUInt32();
    $this->offset   = $font->readUInt32();
    $this->length   = $font->readUInt32();
    $this->entryLength += 12;
  }
}

