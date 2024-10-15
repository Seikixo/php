<?php

    enum DaysOfWeek{
        case MONDAY;
        case TUESDAY;
        case WEDNESDAY;
        case THURSDAY;
        case FRIDAY;
        case SATURDAY;
        case SUNDAY;
    }

    $today = DaysOfWeek::WEDNESDAY;

    if($today === DaysOfWeek::WEDNESDAY){
        echo "It's Wednesday\n";
    }

    enum Color: string{
        case RED = '#FF0000';
        case GREEN = '#00FF00';
        case BLUE = '#0000FF';
    }

    echo Color::RED->value;