<?
use Bitrix\Main\Web\HttpClient,
Bitrix\Main\Entity;
class PreLoadVKTable extends Entity\DataManager
{
    public $errors = array();
    public $limit = 100;
    private $users = array();
    
    
    public static function getFilePath()
    {
        return __FILE__;
    }
    
    public static function getTableName()
    {
        return 'a_preload_vk';
    }
    
    public  function getUParams($id)
    {
        if(!empty($this->users[$id]) && is_array($this->users[$id]))
        {
            return $this->users[$id];
        }
        else
        {
            $this->errors[] = 'user ' .$id. ' not defined';
            return false;
            
        }
    }
    
    
    public static function getMap()
    {
        return array(
            'id' => array(
                'data_type' => 'integer',
                'primary' => true,
                'autocomplete' => true,
            ),
            'uid' => array(
                'data_type' => 'string',
            ),
            'vk_id' => array(
                'data_type' => 'integer',
            ),
            'owner_id' => array(
                'data_type' => 'integer',
            ),
            'user_id' => array(
                'data_type' => 'integer',
            ),
            'name' => array(
                'data_type' => 'string',
            ),
            'description' => array(
                'data_type' => 'string',
            ),
            'category_id' => array(
                'data_type' => 'integer',
            ),
            'album_id' => array(
                'data_type' => 'integer',
            ),
            'price' => array(
                'data_type' => 'float',
            ),
            'old_price' => array(
                'data_type' => 'float',
            ),
            'last_price' => array(
                'data_type' => 'float',
            ),
            'main_photo_id' => array(
                'data_type' => 'integer',
            ),
            'photo_ids' => array(
                'data_type' => 'string',
            ),
            'photo_names' => array(
                'data_type' => 'string',
            ),
            'external_id' => array(
                'data_type' => 'string',
            ),
            'sku' => array(
                'data_type' => 'string',
            ),
     
            '2load' => array(
                'data_type' => 'boolean',
            ),
            'deleted' => array(
                'data_type' => 'boolean',
            ),
            'added' => array(
                'data_type' => 'string',
            ),
        );
    }
}
