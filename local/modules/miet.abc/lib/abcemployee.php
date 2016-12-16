<?php
namespace MIET\ABC;
use Bitrix\Main\Entity;
use Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);
class ABCEmployeeTable extends Entity\DataManager {
    public static function getFilePath()
    {
        return __FILE__;
    }
    /*Название таблицы HL в БД*/
    public static function getTableName()
    {
        return 't_employee_ABC';
    }
    /*Описание полей сущности (соответсвуют полям HL DepartmentABC)*/
    public static function getMap()
    {
        return array(
            'ID' => array(
                'data_type' => 'integer',
                'primary' => true,
                'autocomplete' => true,
                'title' => Loc::getMessage('ABC_ENTITY_ID_FIELD')
            ),
            'UF_ABC' => array(
                'data_type' => 'integer',
                'required' => true,'title' => Loc::getMessage('ABC_ENTITY_UF_ABC_FIELD')
            ),
            'UF_VALUE' => array(
                'data_type' => 'float',
                'required' => true,
                'validation' => array(//Метод-валидатор значения
                    __CLASS__,//Имя класса метода-валидатора, вданном случае текущий класс
                    'validateValue' //Название метода-валидатора вданном классе
                ),
                'title' =>
                    Loc::getMessage('ABC_ENTITY_UF_VALUE_FIELD')
            ),
            'UF_EMPLOYEE' => array(
                'data_type' => 'integer',
                'required' => true,
                'title' =>
                    Loc::getMessage('ABC_ENTITY_UF_EMPLOYEE_FIELD')
            ),
            'UF_CREATED_BY' => array(
                'data_type' => 'integer',
                'required' => true,
                'title' =>
                    Loc::getMessage('ABC_ENTITY_UF_CREATED_BY_FIELD')
            ),
            'UF_CREATED' => array(
                'data_type' => 'datetime',
                'required' => true,
                'title' =>
                    Loc::getMessage('ABC_ENTITY_UF_CREATED_FIELD')
            ),
            'UF_CHANGED_BY' => array(
                'data_type' => 'integer',
                'title' =>
                    Loc::getMessage('ABC_ENTITY_UF_CHANGED_BY_FIELD')
            ),
            'UF_CHANGED' => array(
                'data_type' => 'datetime',
                'title' =>
                    Loc::getMessage('ABC_ENTITY_UF_CHANGED_FIELD'),
            ),
            'UF_PERIOD' => array(
                'data_type' => 'date',
                'title' =>
                    Loc::getMessage('ABC_ENTITY_UF_PERIOD_FIELD'),
            ),
            //Описываем все связи с другими таблицами (внешние ключи)
            new Entity\ReferenceField(
                'UF_ABC',
                'Bitrix\Iblock\ElementTable',
                array('=this.UF_ABC' => 'ref.ID')
            ),
            new Entity\ReferenceField(
                'UF_EMPLOYEE',
                'Bitrix\Main\UserTable',
                array('=this.UF_EMPLOYEE' => 'ref.ID')
            ),
            new Entity\ReferenceField(
                'UF_CREATED_BY','Bitrix\Main\UserTable',
                array('=this.UF_CREATED_BY' => 'ref.ID')
            ),
            new Entity\ReferenceField(
                'UF_CHANGED_BY',
                'Bitrix\Main\UserTable',
                array('=this.UF_CHANGED_BY' => 'ref.ID')
            )
        );
    }
    public static function validateValue()
    {
        return array(
            new Entity\Validator\Range(0, null, false, array("MIN" =>
                "Количество должно быть больше нуля")),
        );
    }
}
?>
