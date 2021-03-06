<?php
class SchCreativeWork extends SchThing{
	protected $about	=	'Thing';
	protected $accessibilityAPI	=	'Text';
	protected $accessibilityControl	=	'Text';
	protected $accessibilityFeature	=	'Text';
	protected $accessibilityHazard	=	'Text';
	protected $accountablePerson	=	'Person';
	protected $aggregateRating	=	'AggregateRating';
	protected $alternativeHeadline	=	'Text';
	protected $associatedMedia	=	'MediaObject';
	protected $audience	=	'Audience';
	protected $audio	=	'AudioObject';
	protected $author	=	'Organization,Person';
	protected $award	=	'Text';
	protected $citation	=	'Text,CreativeWork';
	protected $comment	=	'Comment,UserComments';
	protected $commentCount	=	'Integer';
	protected $contentLocation	=	'Place';
	protected $contentRating	=	'Text';
	protected $contributor	=	'Organization,Person';
	protected $copyrightHolder	=	'Organization,Person';
	protected $copyrightYear	=	'Number';
	protected $creator	=	'Organization,Person';
	protected $dateCreated	=	'Date';
	protected $dateModified	=	'Date';
	protected $datePublished	=	'Date';
	protected $discussionUrl	=	'URL';
	protected $editor	=	'Person';
	protected $educationalAlignment	=	'AlignmentObject';
	protected $educationalUse	=	'Text';
	protected $encoding	=	'MediaObject';
	protected $exampleOfWork	=	'CreativeWork';
	protected $genre	=	'Text';
	protected $hasPart	=	'CreativeWork';
	protected $headline	=	'Text';
	protected $inLanguage	=	'Text';
	protected $interactionCount	=	'Text';
	protected $interactivityType	=	'Text';
	protected $isBasedOnUrl	=	'URL';
	protected $isFamilyFriendly	=	'Boolean';
	protected $isPartOf	=	'CreativeWork';
	protected $keywords	=	'Text';
	protected $learningResourceType	=	'Text';
	protected $license	=	'CreativeWork,URL';
	protected $mentions	=	'Thing';
	protected $offers	=	'Offer';
	protected $position	=	'Text,Integer';
	protected $provider	=	'Organization,Person';
	protected $publisher	=	'Organization';
	protected $publishingPrinciples	=	'URL';
	protected $review	=	'Review';
	protected $sourceOrganization	=	'Organization';
	protected $text	=	'Text';
	protected $thumbnailUrl	=	'URL';
	protected $timeRequired	=	'Duration';
	protected $typicalAgeRange	=	'Text';
	protected $version	=	'Number';
	protected $video	=	'VideoObject';
	protected $workExample	=	'CreativeWork';
	function __construct(){$this->namespace = "CreativeWork";}
}