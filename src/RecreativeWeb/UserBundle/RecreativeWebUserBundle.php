<?php

namespace RecreativeWeb\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class RecreativeWebUserBundle extends Bundle
{
	public function getParent()
	{
		return 'FOSUserBundle';
	}
}
