<?php
/**
 * RealURL features
 *
 * @author  Tim Lochmüller
 */
namespace HDNET\Calendarize\Features;

/**
 * RealURL features
 */
interface SpeakingUrlInterface
{

    /**
     * Get the base for the realurl alias
     *
     * @return string
     */
    public function getRealUrlAliasBase();
}
