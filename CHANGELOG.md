# Change log (3.0.x.x)

## 2024.02.01_1 [#43a4c3b](https://github.com/opencart/opencart/commit/43a4c3bd472ac1d3094764a947ad424e96398409)
### Added
- phpstan 1.10.57
- Add helpers for guessing what classes magic model properties should resolve to (https://github.com/opencart/opencart/commit/e20119971e7ee9dde7fe323eb7d1df2f6e281af6
### Fixed
- extensions uninstall fixes: remove permissions [#13602](https://github.com/opencart/opencart/pull/13602/)
### Updated
- `system/library/db/pgsql.php`

## 2024.01.14_1 [#e201199](https://github.com/opencart/opencart/commit/e20119971e7ee9dde7fe323eb7d1df2f6e281af6)
### Added
-  Hint classes loaded during framework bootup [#13555](https://github.com/opencart/opencart/pull/13555/commits/c624084612e40fb372c2461e55d3bf4ff5a42a8c).
### Fixed
- Composer dependencies.

## 2024.01.10_1 [#8fafedf](https://github.com/opencart/opencart/commit/8fafedfe51127fc9d1d153960ca159cf25113028)
### Fixed
- redundant writings to log

## 2024.01.09_1 [#78c75da](https://github.com/opencart/opencart/commit/78c75dabb17d9aa3a16eab4504b3b3c5bb98d25f)
### Fixed
- duplicate key in `system/config/admin.php`, template_code argument in `controller/admin/event/language.php missing` [#13483](https://github.com/opencart/opencart/pull/13483/commits/8feaecb2a85f7b452aa5989068f7c58c84e76bfe).
- missing return `system/config/admin.php`, template_code argument in `controller/admin/event/language.php missing` [#13482](https://github.com/opencart/opencart/pull/13482/commits/014673c33f2d67decdb9e68e7145d66fb67a1d5d).
- `admin/controller/startup/startup.php`, `catalog/controller/startup/startup.php`

## 2024.01.07_1 [#f2ae349](https://github.com/opencart/opencart/commit/f2ae349e6e949bb100460ae1ed15534c9e6888f2)
### Fixed
- $query customer model [#13445](https://github.com/opencart/opencart/pull/13445/commits/ed39c844f8dda2eb540411ff0d77f4e7f37643e3).
- Undefined variable: $data- upload model [#13436](https://github.com/opencart/opencart/pull/13436/commits/4e9217897756e9f53adfecab02c05a0121353253).
- Undefined variable: $data - router controller [#13439](https://github.com/opencart/opencart/pull/13439/commits/5742f0fd1a74a8459323f2b18e72eae6b6dcfd50).
- Caught class DB\mysqli_sql_exception not found. mysqli.php [#13432](https://github.com/opencart/opencart/pull/13432/commits/c26c891f8f587cf487ee40715a792131b258e603).
- Remove Ref check from proxy.php [#13426](https://github.com/opencart/opencart/pull/13426/commits/aa30271897f82bc5bfd6eb685510835fef75e4bd).
### Removed
- fraudlabspro extension.

## 2024.01.06_1 [#8a3c27d](https://github.com/opencart/opencart/commit/8a3c27de562613bab5779647cc3d934bea586098)
### Fixed
- Wrong use of concat in recurring.php [#47ccb9e](https://github.com/opencart/opencart/commit/47ccb9ec604acd8b4bd120b0ab6e24640c7dd1cb).
- Removed duplicated values from array - utf8 helper [#022415c](https://github.com/opencart/opencart/commit/022415cfa9c49145dd0cd154a9ecbdfcd1e248ea).

## 2023.12.08_1 [#a71bae0](https://github.com/opencart/opencart/commit/a71bae0725154830963ab83ced69fca9179ba87f)
### Fixed
- Redirect protection [PR #13095](https://github.com/opencart/opencart/pull/13095/commits/c6f546321c984ce89fcdd4af0ef86e5af6ce7e8d).
- Pagination bug in the Google Base extension [PR #13100](https://github.com/opencart/opencart/pull/13100/commits/f0b660ae6039a534cb0df72e3d9ad76feffd3caf).
- `.htaccess.txt` [PR #12910](https://github.com/opencart/opencart/pull/12910/commits/08e434355245d335d02c3b566559f9bc073e060f).

## 2023.11.28_2 [#a71bae0](https://github.com/opencart/opencart/commit/a71bae0725154830963ab83ced69fca9179ba87f)
### Fixed
- Added language variable 'text_no_results' for Manufacturer [PR #13030](https://github.com/opencart/opencart/pull/13030/commits/92fe313c594dded1980a4e3fe1228b93f021b659).
- Wrong message on Manufacturer List [PR #13029](https://github.com/opencart/opencart/pull/13029/commits/333d534bad96cd2c816e0a04c04fe4dde0a8ddb3).

## 2023.11.28_1 [#402559b](https://github.com/opencart/opencart/commit/402559b4ad68624d6d6cd5c21e0f978aee3b07bd)
### Fixed
- `system/engine/action.php` preg_replace(): Passing null to parameter #3 ($subject) of type array|string is deprecated... [PR #13019](https://github.com/opencart/opencart/pull/13019/commits/03da248d50932f78fc82b84efc37ba1430f79a2b).
- Attribute automcomplete [PR #12990](https://github.com/opencart/opencart/pull/12990/commits/fa43add7c0646f14eea8ba04fe783c3c796a49bf).

## 2023.11.18_1 [#78d735f](https://github.com/opencart/opencart/commit/78d735f36e43dfbba61319ab8dcd32ce57b7724f)
### Fixed
- `DB_PREFIX` [PR #12975](https://github.com/opencart/opencart/pull/12975/commits/09873d2052b003d27ec55da63e5b362d2dfb1eb4)
- `robots.txt`.

## 2023.11.14_1 [#b2bb6f0](https://github.com/opencart/opencart/commit/b2bb6f07a8f9c53639f708933b8c6cef14631b95)
### Fixed
- `opencart.sql` Typo related to the currency module permissions.

## 2023.11.03_1 [#b2bb6f0](https://github.com/opencart/opencart/commit/b2bb6f07a8f9c53639f708933b8c6cef14631b95)
### Fixed
- Leading space to prevent appending to the password restore link [PR #12223](https://github.com/opencart/opencart/pull/12223/commits/975cffca9866518aa5c3101dcc49d92c1d9f40aa).
- Currency rates refresh [#888f819](https://github.com/opencart/opencart/commit/888f819cfe79d7eace05c400a4beed1328c8ae0d).

## 2023.10.16_1 [#cfae395](https://github.com/opencart/opencart/commit/cfae395219c070b132cc10aa9522ad9b052d52e5)
### Changed
- Synced with the [3.0.3.9](https://github.com/ocmod-space/opencart/releases/tag/3.0.3.9) release.
### Fixed
- Minor errors and typos.

## 2023.09.22_1 [#30735b3](https://github.com/opencart/opencart/commit/30735b314f953ffdf582e57aba1387fc6c0050ab)
### Fixed
- Error caused by voucher order because it has not shipping country.

## 2023.09.05_1 [#30735b3](https://github.com/opencart/opencart/commit/30735b314f953ffdf582e57aba1387fc6c0050ab)
### Fixed
- Fixed error displaying guest shipping [PR #12672](https://github.com/opencart/opencart/pull/12672).

## 2023.08.30_1 [#30735b3](https://github.com/opencart/opencart/commit/30735b314f953ffdf582e57aba1387fc6c0050ab)
### Fixed
- Update translation_form.twig [PR #12640](https://github.com/opencart/opencart/pull/12640).

## 2023.08.02_1 [#299283a](https://github.com/opencart/opencart/commit/299283a8f1dc5d91e0534729ba0678a8ec82996c)
### Updated
- `oc_zone` table - added tax enclave entries for Germany, Swiss, Austria and Greece into the zone table.

## 2023.07.23_1 [#299283a](https://github.com/opencart/opencart/commit/299283a8f1dc5d91e0534729ba0678a8ec82996c)
### Fixed
- Deprecation error fixes [PR #12519](https://github.com/opencart/opencart/pull/12519).

## 2023.07.13_1 [#e722a90](https://github.com/opencart/opencart/commit/e722a901520c359347104d5a63869a597bcdaf33)
### Fixed
- Filemanager [PR #12491](https://github.com/opencart/opencart/pull/12491).

## 2023.07.10_1 [#cb03189](https://github.com/opencart/opencart/commit/cb03189aca150337be0668193199897de4bb01e6)
### Fixed
- Bootstrap popover [PR #12463](https://github.com/opencart/opencart/pull/12463).

## 2023.07.05_1 [#1da13c6](https://github.com/opencart/opencart/commit/1da13c63a99dd9e8a2ee35e004874925363ed6bd)
### Fixed
- Fix the admin map when the payment address is disabled [#4b2e195](https://github.com/opencartbot/opencart/commit/4b2e195ba0e1a15fd1fc49e32ab4ff8d9316d419).

## 2023.07.03_1 [#1da13c6](https://github.com/opencart/opencart/commit/1da13c63a99dd9e8a2ee35e004874925363ed6bd)
### Changed
- Twig docs link [PR #12156](https://github.com/opencart/opencart/pull/12156).

## 2023.06.27_2 [#7423db3](https://github.com/opencart/opencart/commit/7423db3e1c86f041a6560d56dc6e0bfc57f94ba9)
### Changed
- Version in admin to 3.0.x.x.

## 2023.06.27_1 [#7423db3](https://github.com/opencart/opencart/commit/7423db3e1c86f041a6560d56dc6e0bfc57f94ba9)
### Updated
- Bootstrap to 3.4.1.
- jQuery to 3.7.0.
- Vendor libraries.

## 2023.06.24_1
### Fixed
- Fixed SMTP line lengths [PR #12384](https://github.com/opencart/opencart/pull/12384).
- Match summernote editor default fontsize with the ones on the corresponding frontend pages [PR #12385](https://github.com/opencart/opencart/pull/12385).

## 2023.06.05_1 [#fd7e99c](https://github.com/opencart/opencart/commit/fd7e99cd23a96b55043b1ac14155c2525de05faa)
### Removed
- No more AddThis services, see at https://www.addthis.com/.

## 2023.05.29_1 [#ed199ee](https://github.com/opencart/opencart/commit/ed199ee957429ae0dda001a0820d31e8a2c515ea)
### Fixed
- Implicit backslashes escape.
- Update pagination code in controllers:
    - [PR #12252](https://github.com/opencart/opencart/pull/12252/files).
    - [PR #12253](https://github.com/opencart/opencart/pull/12253/files).
    - [PR #12254](https://github.com/opencart/opencart/pull/12254/files).
    - [PR #12255](https://github.com/opencart/opencart/pull/12255/files).
    - [PR #12257](https://github.com/opencart/opencart/pull/12257/files).
    - [PR #12256](https://github.com/opencart/opencart/pull/12256/files).
- Update city length check - [PR #12251](https://github.com/opencart/opencart/pull/12251/files).
- Check if encryption negotiation failed - [PR #12321](https://github.com/opencart/opencart/pull/12321/files).

## 2023.04.29_1 [#f4dd6e0](https://github.com/opencart/opencart/commit/f4dd6e0b73721d4824361e684ac63c9a2955e320)
### Fixed
- PHP files was beautifed to meet the [coding standards](https://github.com/opencart/opencart/wiki/Coding-standards).
### Changed
- `admin/controller/extension/extension/promotion.php` extension reworked to dummy.
### Removed
- Google shopping, 3rd-party payment and shipping modules (see ./deleted.txt).
