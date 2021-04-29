<?namespace OCA\UserStatus\AppInfo;

use OCA\UserStatus\Capabilities;
use OCA\UserStatus\Connector\UserStatusProvider;
use OCA\UserStatus\Listener\BeforeTemplateRenderedListener;
use OCA\UserStatus\Listener\UserDeletedListener;
use OCA\UserStatus\Listener\UserLiveStatusListener;
use OCA\UserStatus\Dashboard\UserStatusWidget;
use OCP\AppFramework\App;
use OCP\AppFramework\Bootstrap\IBootContext;
use OCP\AppFramework\Bootstrap\IBootstrap;
use OCP\AppFramework\Bootstrap\IRegistrationContext;
use OCP\AppFramework\Http\Events\BeforeTemplateRenderedEvent;
use OCP\User\Events\UserDeletedEvent;
use OCP\User\Events\UserLiveStatusEvent;
use OCP\UserStatus\IManager;

/**
 * Class Application
 *
 * @package OCA\UserStatus\AppInfo
 */
class Application extends App implements IBootstrap {

	/** @var string */
	public const APP_ID = 'vueexample';

	/**
	 * Application constructor.
	 *
	 * @param array $urlParams
	 */
	public function __construct(array $urlParams = []) {
		parent::__construct(self::APP_ID, $urlParams);
	}

	/**
	 * @inheritDoc
	 */
	public function register(IRegistrationContext $context): void {
		// Register OCS Capabilities
		$context->registerCapability(Capabilities::class);

		// Register Event Listeners
		$context->registerEventListener(UserDeletedEvent::class, UserDeletedListener::class);
		$context->registerEventListener(UserLiveStatusEvent::class, UserLiveStatusListener::class);
		$context->registerEventListener(BeforeTemplateRenderedEvent::class, BeforeTemplateRenderedListener::class);

		// Register the Dashboard panel
		$context->registerDashboardWidget(UserStatusWidget::class);
	}

	public function boot(IBootContext $context): void {
		/** @var IManager $userStatusManager */
		$userStatusManager = $context->getServerContainer()->get(IManager::class);
		$userStatusManager->registerProvider(UserStatusProvider::class);
	}
}
