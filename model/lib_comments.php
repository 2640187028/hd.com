<?php
/**
 * ����ģ��
 */
class lib_comments extends spModel

{

    public $pk = 'c_id';

    public $table = 'comments';

    public $linker = array(

        //��С˵���һ��һ��ϵ����

        array(

            'type' => 'hasone',   // �������ͣ�������һ��һ����

			'map' => 'xs',    // �����ı�ʶ

			'mapkey' => 'xs_id', // �������Ӧ��������ֶ���

			'fclass' => 'lib_xs', // ��Ӧ�������

			'fkey' => 'xs_id',    // ��Ӧ���й������ֶ���

			'enabled' => true     // ���ù�

        ),

         //���û����һ��һ��ϵ����

        array(

            'type' => 'hasone',   // �������ͣ�������һ��һ����

			'map' => 'user',    // �����ı�ʶ

			'mapkey' => 'user_id', // �������Ӧ��������ֶ���

			'fclass' => 'lib_member', // ��Ӧ�������

			'fkey' => 'user_id',    // ��Ӧ���й������ֶ���

			'enabled' => true     // ���ù�

        ),

    );

}