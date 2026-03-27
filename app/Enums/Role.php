<?php
namespace App\Enums;
enum Role: string{
            case CLIENT = 'client';
            case EMPLOYEE = 'employee';
            case ADMIN = 'admin';
        }
?>