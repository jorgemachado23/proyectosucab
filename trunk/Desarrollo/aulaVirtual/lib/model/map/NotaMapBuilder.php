<?php


/**
 * This class adds structure of 'nota' table to 'propel' DatabaseMap object.
 *
 *
 * This class was autogenerated by Propel 1.3.0-dev on:
 *
<<<<<<< .mine
 * 05/27/10 19:39:22
=======
 * 05/26/10 17:09:15
>>>>>>> .r217
 *
 *
 * These statically-built map classes are used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    lib.model.map
 */
class NotaMapBuilder implements MapBuilder {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.NotaMapBuilder';

	/**
	 * The database map.
	 */
	private $dbMap;

	/**
	 * Tells us if this DatabaseMapBuilder is built so that we
	 * don't have to re-build it every time.
	 *
	 * @return     boolean true if this DatabaseMapBuilder is built, false otherwise.
	 */
	public function isBuilt()
	{
		return ($this->dbMap !== null);
	}

	/**
	 * Gets the databasemap this map builder built.
	 *
	 * @return     the databasemap
	 */
	public function getDatabaseMap()
	{
		return $this->dbMap;
	}

	/**
	 * The doBuild() method builds the DatabaseMap
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function doBuild()
	{
		$this->dbMap = Propel::getDatabaseMap(NotaPeer::DATABASE_NAME);

		$tMap = $this->dbMap->addTable(NotaPeer::TABLE_NAME);
		$tMap->setPhpName('Nota');
		$tMap->setClassname('Nota');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('IDNOTA', 'Idnota', 'INTEGER', true, 11);

		$tMap->addColumn('CREATED_AT', 'CreatedAt', 'DATE', true, null);

		$tMap->addColumn('UPDATED_AT', 'UpdatedAt', 'DATE', false, null);

		$tMap->addColumn('NOTA', 'Nota', 'INTEGER', false, 11);

		$tMap->addPrimaryKey('IDPERSONA', 'Idpersona', 'INTEGER', true, 11);

		$tMap->addPrimaryKey('IDEVALUACION', 'Idevaluacion', 'INTEGER', true, 11);

		$tMap->addColumn('IDLAPSO', 'Idlapso', 'INTEGER', true, 11);

	} // doBuild()

} // NotaMapBuilder
