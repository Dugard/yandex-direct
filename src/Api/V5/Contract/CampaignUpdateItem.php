<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class CampaignUpdateItem extends CampaignBase
{

    protected $Id = null;

//    Can be omit.
//    protected $Name = null;

//    Can be omit.
//    protected $StartDate = null;

//    Can be omit.
//    protected $DailyBudget = null;

//    Can be omit.
//    protected $EndDate = null;

//    Can be omit.
//    protected $NegativeKeywords = null;

//    Can be omit.
//    protected $BlockedIps = null;

//    Can be omit.
//    protected $ExcludedSites = null;

//    Can be omit.
//    protected $TextCampaign = null;

//    Can be omit.
//    protected $MobileAppCampaign = null;

//    Can be omit.
//    protected $DynamicTextCampaign = null;

//    Can be omit.
//    protected $CpmBannerCampaign = null;

//    Can be omit.
//    protected $SmartCampaign = null;

//    Can be omit.
//    protected $TimeTargeting = null;

    /**
     * Creates a new instance of CampaignUpdateItem.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * Sets Id.
     *
     * @param int $value
     * @return $this
     */
    public function setId($value)
    {
        $this->Id = $value;

        return $this;
    }

    /**
     * Gets Name.
     *
     * @return string|null
     */
    public function getName()
    {
        return isset($this->Name) ? $this->Name : null;
    }

    /**
     * Sets Name.
     *
     * @param string|null $value
     * @return $this
     */
    public function setName($value = null)
    {
        $this->Name = $value;

        return $this;
    }

    /**
     * Gets StartDate.
     *
     * @return string|null
     */
    public function getStartDate()
    {
        return isset($this->StartDate) ? $this->StartDate : null;
    }

    /**
     * Sets StartDate.
     *
     * @param string|null $value
     * @return $this
     */
    public function setStartDate($value = null)
    {
        $this->StartDate = $value;

        return $this;
    }

    /**
     * Gets DailyBudget.
     *
     * @return DailyBudget|null
     */
    public function getDailyBudget()
    {
        return isset($this->DailyBudget) ? $this->DailyBudget : null;
    }

    /**
     * Sets DailyBudget.
     *
     * @param DailyBudget|null $value
     * @return $this
     */
    public function setDailyBudget(DailyBudget $value = null)
    {
        $this->DailyBudget = $value;

        return $this;
    }

    /**
     * Gets EndDate.
     *
     * @return string|null
     */
    public function getEndDate()
    {
        return isset($this->EndDate) ? $this->EndDate : null;
    }

    /**
     * Sets EndDate.
     *
     * @param string|null $value
     * @return $this
     */
    public function setEndDate($value = null)
    {
        $this->EndDate = $value;

        return $this;
    }

    /**
     * Gets NegativeKeywords.
     *
     * @return string[]|null
     */
    public function getNegativeKeywords()
    {
        return isset($this->NegativeKeywords) ? $this->NegativeKeywords : null;
    }

    /**
     * Sets NegativeKeywords.
     *
     * @param string[]|null $value
     * @return $this
     */
    public function setNegativeKeywords(array $value = null)
    {
        $this->NegativeKeywords = $value;

        return $this;
    }

    /**
     * Gets BlockedIps.
     *
     * @return string[]|null
     */
    public function getBlockedIps()
    {
        return isset($this->BlockedIps) ? $this->BlockedIps : null;
    }

    /**
     * Sets BlockedIps.
     *
     * @param string[]|null $value
     * @return $this
     */
    public function setBlockedIps(array $value = null)
    {
        $this->BlockedIps = $value;

        return $this;
    }

    /**
     * Gets ExcludedSites.
     *
     * @return string[]|null
     */
    public function getExcludedSites()
    {
        return isset($this->ExcludedSites) ? $this->ExcludedSites : null;
    }

    /**
     * Sets ExcludedSites.
     *
     * @param string[]|null $value
     * @return $this
     */
    public function setExcludedSites(array $value = null)
    {
        $this->ExcludedSites = $value;

        return $this;
    }

    /**
     * Gets TextCampaign.
     *
     * @return TextCampaignUpdateItem|null
     */
    public function getTextCampaign()
    {
        return isset($this->TextCampaign) ? $this->TextCampaign : null;
    }

    /**
     * Sets TextCampaign.
     *
     * @param TextCampaignUpdateItem|null $value
     * @return $this
     */
    public function setTextCampaign(TextCampaignUpdateItem $value = null)
    {
        $this->TextCampaign = $value;

        return $this;
    }

    /**
     * Gets MobileAppCampaign.
     *
     * @return MobileAppCampaignUpdateItem|null
     */
    public function getMobileAppCampaign()
    {
        return isset($this->MobileAppCampaign) ? $this->MobileAppCampaign : null;
    }

    /**
     * Sets MobileAppCampaign.
     *
     * @param MobileAppCampaignUpdateItem|null $value
     * @return $this
     */
    public function setMobileAppCampaign(MobileAppCampaignUpdateItem $value = null)
    {
        $this->MobileAppCampaign = $value;

        return $this;
    }

    /**
     * Gets DynamicTextCampaign.
     *
     * @return DynamicTextCampaignUpdateItem|null
     */
    public function getDynamicTextCampaign()
    {
        return isset($this->DynamicTextCampaign) ? $this->DynamicTextCampaign : null;
    }

    /**
     * Sets DynamicTextCampaign.
     *
     * @param DynamicTextCampaignUpdateItem|null $value
     * @return $this
     */
    public function setDynamicTextCampaign(DynamicTextCampaignUpdateItem $value = null)
    {
        $this->DynamicTextCampaign = $value;

        return $this;
    }

    /**
     * Gets CpmBannerCampaign.
     *
     * @return CpmBannerCampaignUpdateItem|null
     */
    public function getCpmBannerCampaign()
    {
        return isset($this->CpmBannerCampaign) ? $this->CpmBannerCampaign : null;
    }

    /**
     * Sets CpmBannerCampaign.
     *
     * @param CpmBannerCampaignUpdateItem|null $value
     * @return $this
     */
    public function setCpmBannerCampaign(CpmBannerCampaignUpdateItem $value = null)
    {
        $this->CpmBannerCampaign = $value;

        return $this;
    }

    /**
     * Gets SmartCampaign.
     *
     * @return SmartCampaignUpdateItem|null
     */
    public function getSmartCampaign()
    {
        return isset($this->SmartCampaign) ? $this->SmartCampaign : null;
    }

    /**
     * Sets SmartCampaign.
     *
     * @param SmartCampaignUpdateItem|null $value
     * @return $this
     */
    public function setSmartCampaign(SmartCampaignUpdateItem $value = null)
    {
        $this->SmartCampaign = $value;

        return $this;
    }

    /**
     * Gets TimeTargeting.
     *
     * @return TimeTargeting|null
     */
    public function getTimeTargeting()
    {
        return isset($this->TimeTargeting) ? $this->TimeTargeting : null;
    }

    /**
     * Sets TimeTargeting.
     *
     * @param TimeTargeting|null $value
     * @return $this
     */
    public function setTimeTargeting(TimeTargeting $value = null)
    {
        $this->TimeTargeting = $value;

        return $this;
    }


}

