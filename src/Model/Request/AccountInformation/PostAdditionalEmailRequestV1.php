<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.07.19
 * Time: 17:22
 */

namespace Imper86\AllegroRestApiSdk\Model\Request\AccountInformation;


use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Model\Request\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;

class PostAdditionalEmailRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $email)
    {
        parent::__construct(
            'POST',
            "/account/additional-emails",
            $this->prepareHeaders($token, ContentType::PUBLIC_V1),
            json_encode(['email' => $email])
        );
    }
}
