<?php

namespace My\Name;

class MyClass {}

function myFunction() {}

const MY_CONST = 0;

// uso global do namespace
var_dump(new \My\Name\MyClass);

// uso de constants no namespace
echo namespace\MY_CONST;

// retorna todo namespace atual
echo __NAMESPACE__;

/*
IMPORTANT: Namespace names PHP and php, and compound names starting with these names (like PHP\Classes) are reserved for internal language use and should not be used in the userspace code.
*/
