<?php

@include('config/includes.php');

!empty($viewData) ? extract($viewData) : null;
!empty($viewPath) ? @include($viewPath) : null;