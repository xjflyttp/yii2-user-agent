<?php
namespace xj\ua;

use Yii;
use yii\base\Model;

class UserAgent extends Model
{

    /**
     * @var string
     */
    public $platform;

    /**
     * @var string
     */
    public $browser;

    /**
     * @var string
     */
    public $version;

    /**
     * @return array
     */
    public function rules()
    {
        return [
            [['platform', 'browser', 'version'], 'safe'],
        ];
    }

    /**
     * @param string $userAgent
     * @return UserAgent
     */
    public static function model($userAgent = null)
    {
        if (null === $userAgent) {
            $ua = static::getDefaultUserAgent();
        }
        return new static(parse_user_agent($userAgent));
    }

    /**
     * @return string
     */
    public static function getDefaultUserAgent()
    {
        return Yii::$app->request->getUserAgent();
    }
}