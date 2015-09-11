<?hh

class ContainerAwareUserModelFactory extends ContainerAwareModelFactory implements UserModelFactory {
	protected function getName () {
		return UserModel::class;
	}
}