<?php
/**
 * Unit test for PluginPackageRootValue.
 *
 * @package CodeKaizen\WPPackageAutoUpdaterTests\Unit\Value\PackageRoot
 */

namespace CodeKaizen\WPPackageAutoUpdaterTests\Unit\Value\PackageRoot;

use CodeKaizen\WPPackageAutoUpdater\Value\PackageRoot\PluginPackageRootValue;
use PHPUnit\Framework\TestCase;
use WP_Mock;

/**
 * Class PluginPackageRootValueTest
 *
 * @covers \CodeKaizen\WPPackageAutoUpdater\Value\PackageRoot\PluginPackageRootValue
 */
class PluginPackageRootValueTest extends TestCase {
	/**
	 * Test instantiation of PluginPackageRootValue.
	 *
	 * @return void
	 */
	public function testCanBeInstantiated(): void {
		$root = new PluginPackageRootValue();
		$this->assertInstanceOf( PluginPackageRootValue::class, $root );
	}

	/**
	 * Test getPackageRoot returns WP_PLUGIN_DIR.
	 *
	 * @return void
	 */
	public function testGetPackageRootReturnsWpPluginDir(): void {
		$wpPluginDir = WP_PLUGIN_DIR;
		$root        = new PluginPackageRootValue();
		$this->assertEquals( $wpPluginDir, $root->getPackageRoot() );
	}
}
