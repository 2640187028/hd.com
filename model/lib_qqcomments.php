<?php
/**
 * QQ���쾫ѡģ��
 */
class lib_qqcomments extends spModel

{

    public $pk = 'qqc_id';

    public $table = 'qqcomments';

    public $linker = array(

        //��С˵���һ��һ��ϵ����

        array(

            'type' => 'hasone',   // �������ͣ�������һ��һ����

			'map' => 'xs',    // �����ı�ʶ

			'mapkey' => 'xs_id', // �������Ӧ��������ֶ���

			'fclass' => 'lib_xs', // ��Ӧ�������

			'fkey' => 'xs_id',    // ��Ӧ���й������ֶ���

			'enabled' => true     // ���ù�

        )

    );

}