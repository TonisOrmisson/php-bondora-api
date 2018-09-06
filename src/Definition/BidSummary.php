<?php

namespace Petslane\Bondora\Definition;

/**
 * Bid's information
 */
class BidSummary extends Definition {

    /**
     * Bid unique identifier
     *
     * @var string
     */
    public $Id;


    /**
     * Id of auction to bid into
     *
     * @var string
     */
    public $AuctionId;


    /**
     * Amount that was requested to bid
     *
     * @var float
     */
    public $RequestedBidAmount;


    /**
     * Amount that is bidded
     *
     * @var float
     */
    public $ActualBidAmount;


    /**
     * Minimum amount that was specified for auction
     *
     * @var float
     * @deprecated 1.0.2.1 Obsolete: Not used actively anymore
     */
    public $RequestedBidMinimumLimit;


    /**
     * When bid was requested
     *
     * @var \DateTime
     */
    public $BidRequestedDate;


    /**
     * When bid was processed
     *
     * @var \DateTime
     */
    public $BidProcessedDate;


    /**
     * Is request currently processed
     *
     * @var bool
     */
    public $IsRequestBeingProcessed;


    /**
     * Status of bid
     *     0 Pending
     *     1 Open
     *     2 Successful
     *     3 Failed
     *     4 Cancelled
     *     5 Accepted
     *
     * Enum: 0, 1, 2, 3, 4, 5
     *
     * @var int
     */
    public $StatusCode;


    /**
     * Why bid failed
     *
     * Enum:
     *     0 NotSet
     *     1 AvailableAmountLowerThanMinInvestmentLimit
     *     2 BiddingOnOwnAuction
     *     3 BiddingOnInactiveDuplicate
     *     4 BiddingAmountTooSmall
     *     5 NotEnoughBalance
     *     6 AuctionIsClosed
     *     7 AuctionStatusNotOpen
     *     8 AuctionNoRiskScore
     *     9 AuctionAlreadyFullyBidded
     *     10 AuctionNotFound
     *     11 AuctionNotEnoughLoanAmountForBidding
     *     12 AuctionCannotBuyWholeLoan
     *     13 AuctionIsCancelled
     *     14 Unknown
     *
     * @var int
     */
    public $FailureReason;

}

