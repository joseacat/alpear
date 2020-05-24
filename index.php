<?php

@include('config/includes.php');

!empty($viewData) ? extract($viewData) : null;
!empty($viewName) ? @include($viewName) : null;