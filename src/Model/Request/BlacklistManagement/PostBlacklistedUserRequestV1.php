<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.07.19
 * Time: 17:26
 */

namespace Imper86\AllegroRestApiSdk\Model\Request\BlacklistManagement;


use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Model\Request\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;

class PostBlacklistedUserRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, array $body)
    {
        parent::__construct(
            'POST',
            "/sale/blacklisted-users",
            $this->prepareHeaders($token, ContentType::BETA_V1),
            json_encode($body)
        );
    }
}