<?php
	namespace ElasticEmailEnums; 

class SegmentHistory
{
    /**
     * ID number of history.
     */
    public /*int*/ $SegmentHistoryID;

    /**
     * ID number of your segment.
     */
    public /*int*/ $SegmentID;

    /**
     * Date in YYYY-MM-DD format
     */
    public /*int*/ $Day;

    /**
     * Number of items.
     */
    public /*long*/ $Count;

    /**
     * 
     */
    public /*long*/ $EngagedCount;

    /**
     * 
     */
    public /*long*/ $ActiveCount;

    /**
     * 
     */
    public /*long*/ $BouncedCount;

    /**
     * Total emails unsubscribed
     */
    public /*long*/ $UnsubscribedCount;

    /**
     * 
     */
    public /*long*/ $AbuseCount;

    /**
     * 
     */
    public /*long*/ $InactiveCount;

}
