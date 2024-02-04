<div class='downloadable-con-container'>
	<div class='downloadable-con-outer'>
		<div class='downloadable-con-inner-a'>
			<div class='downloadable-con-image' style="background: url(/img/icons/list/os-windows-11.png) center left / 42px no-repeat;">
			</div>
			<div class='downloadable-tx1-title darkmode-txt'>
				<span>Windows</span>
			</div>
			<div class='downloadable-tx2-desc darkmode-txt'>
				<span>Группа семейств коммерческих проприетарных операционных систем корпорации Microsoft, ориентированных на управление с помощью графического интерфейса.Каждое семейство обслуживает определённый сектор компьютерной индустрии. Активные семейства Microsoft Windows включают Windows NT и Windows IoT; они могут включать подсемейства (например, Windows Server или Windows Embedded Compact) (Windows CE). Неподдерживаемые – Windows 9x, Windows Mobile и Windows Phone</span>
			</div>
			<?php
			if (isset($build) && !is_null($build->get_url_windows()))
				printf("<a href=\"%s\" download>", $build->get_url_windows());
			?>
			<?php
			if (isset($build) && !is_null($build->get_url_windows()))
				printf("</a>");
			?>
		</div>
	</div>
	<div class='downloadable-con-outer'>
		<div class='downloadable-con-inner-a'>
			<div class='downloadable-con-image' style="background: url(/img/icons/list/os-linux-na.png) center left / 42px no-repeat;">
			</div>
			<div class='downloadable-tx1-title darkmode-txt'>
				<span>Linux</span>
			</div>
			<div class='downloadable-tx2-desc darkmode-txt'>
				<span>Семейство Unix-подобных операционных систем на базе ядра Linux, включающих тот или иной набор утилит и программ проекта GNU, и, возможно, другие компоненты.Как и ядро Linux, системы на его основе создаются и распространяются в соответствии с моделью разработки свободного и открытого программного обеспечения. GNU/Linux-системы распространяются в основном бесплатно в виде различных дистрибутивов — в форме, готовой для установки и удобной для сопровождения и обновлений, — и имеющих свой набор системных и прикладных компонентов, как свободных, так и проприетарных.</span>
			</div>
			<div class='sha2-tx1-title darkmode-txt'>
				<span></span>
			</div>
			<?php
			if (isset($build) && !is_null($build->get_url_linux()))
				printf("<a href=\"%s\" download>", $build->get_url_linux());
			?>
			<?php
			if (isset($build) && !is_null($build->get_url_linux()))
				printf("</a>");
			?>
		</div>
	</div>
	<div class='downloadable-con-outer'>
		<div class='downloadable-con-inner-a'>
			<div class='downloadable-con-image darkmode-invert' style="background: url(/img/icons/list/os-macos.png) center left / 42px no-repeat;">
			</div>
			<div class='downloadable-tx1-title darkmode-txt'>
				<span>macOS</span>
			</div>
			<div class='downloadable-tx2-desc darkmode-txt'>
				<span>Проприетарная операционная система компании Apple.Является преемницей Mac OS 9. Семейство операционных систем macOS является вторым по распространённости для десктопа (после Windows).Самая популярная версия macOS — Catalina (83,36 % среди всех версий macOS), следом идут Mojave (5,64 %), High Sierra (5,05 %), Sierra (2,1 %), El Capitan (1,56 %), Yosemite (1,21 % ).В macOS используется ядро XNU, основанное на микроядре Mach и содержащее программный код, разработанный компанией Apple, а также код из ОС NeXTSTEP и FreeBSD.</span>
			</div>
			<?php
			if (isset($build) && !is_null($build->get_url_mac()))
				printf("</a>");
			?>
		</div>
	</div>
</div>