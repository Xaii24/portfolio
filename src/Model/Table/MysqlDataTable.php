<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MysqlData Model
 *
 * @method \App\Model\Entity\MysqlData newEmptyEntity()
 * @method \App\Model\Entity\MysqlData newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\MysqlData> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MysqlData get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\MysqlData findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\MysqlData patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\MysqlData> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\MysqlData|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\MysqlData saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\MysqlData>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\MysqlData>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\MysqlData>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\MysqlData> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\MysqlData>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\MysqlData>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\MysqlData>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\MysqlData> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class MysqlDataTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('mysql_data');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('type')
            ->maxLength('type', 50)
            ->allowEmptyString('type');

        return $validator;
    }
}
