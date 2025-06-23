# Change log (3.x.x.x)

## 2025.06.23
### Fixed
 - Google Base feed module: Added support for more currencies, fix for price tag which must include currency code [#14956](https://github.com/opencart/opencart/pull/14956).

## 2025.06.18
### Fixed
 - Suppressed PHP warnings on cache file deletion using @unlink().
 - Language entries.

## 2025.06.11
### Added
 - Add `OPTIMIZE TABLE` to `db.php` [#14915](https://github.com/opencart/opencart/pull/14915).
### Fixed
 - Language entries.

## 2025.05.15
### Added
  - Added whatismyipaddress to customer_search_info report [#14243](https://github.com/opencart/opencart/pull/14243).
### Fixed
  - https [#14242](https://github.com/opencart/opencart/pull/14242).
  - URL encoding for product tags [#14256](https://github.com/opencart/opencart/pull/14256), [#14257](https://github.com/opencart/opencart/pull/14257).
  - Typos [#14296](https://github.com/opencart/opencart/pull/14296).
  - Saving new product with a recurring payment profile [#14397](https://github.com/opencart/opencart/pull/14397).
  - Cookie lifetime [#14638](https://github.com/opencart/opencart/pull/14638), [#14645](https://github.com/opencart/opencart/pull/14645).
  - Product sort order [#14864](https://github.com/opencart/opencart/pull/14864).
  - Alert close button positioning [#14856](https://github.com/opencart/opencart/pull/14856).
  - Add missing space [#14871](https://github.com/opencart/opencart/issues/14871).

## 2024.12.06
### Updated
  - symfony/deprecation-contracts (v2.5.3 => v2.5.4)
  - twig/twig (v3.11.1 => v3.11.3)
  - Basic version (v3.0.4.0 => v3.0.4.1).
### Added
  - Added whatismyipaddress to customer_search_info report [#14244](https://github.com/opencart/opencart/pull/14244/commits/1d0bdb1ce0dcb391e6dd904018b1aa384e136d86)
### Fixed
  - Whitespaces.

## 2024.11.15
### Updated
  - JQuery 3.7.1
  - Bump twig/twig from 3.11.1 to 3.11.2

## 2024.09.17
### Updated
  - Upgraded symfony/polyfill-ctype (v1.29.0 => v1.31.0)
  - Upgraded scssphp/scssphp (v1.12.1 => v1.13.0)
  - Installed symfony/polyfill-php81 (v1.31.0)
  - Upgraded symfony/polyfill-php80 (v1.29.0 => v1.31.0)
  - Upgraded symfony/polyfill-mbstring (v1.29.0 => v1.31.0)
  - Upgraded twig/twig (v3.10.3 => v3.11.1)

## 2024.09.07
### Updated
- `smtp.php` [#270a07d](https://github.com/opencart/opencart/commit/270a07d04e04b24d4ca67357b71f0588a42fa873).
### Fixed
- Error caused when default currency not in ECB list  [#14112](https://github.com/opencart/opencart/pull/14112).
- Typo api controller [#14090](https://github.com/opencart/opencart/pull/14090).

## 2024.07.04
### Fixed
- Improved pagination limit verifications [#14013](https://github.com/opencart/opencart/commit/09f4d4b5a5b25b724ec18f59d849b9a0c3d54b8b).

## 2024.06.02
### Fixed
- Unused code [#13967](https://github.com/opencart/opencart/pull/13967/commits/8e91d76fc3a10f2f7d9493587c00154508368dc2).
- ECB currency module [#13982](https://github.com/opencart/opencart/pull/13982/commits/253a45f8ecd4c176c0dc4adeff220a9a01d8bf71), [#13983](https://github.com/opencart/opencart/pull/13983/commits/864e720e97fc70d67fa80b0c1b0286f7bd18ca4b#diff-5b1ee3a287df1c3566088729fda07ffad61d4c0771c67d4b44967f9e068990e2).

## 2024.05.29
### Fixed
- Currency refresh [#13969](https://github.com/opencart/opencart/pull/13969/commits/9d97154f1d5a0a2b8ce3c8ab082e64546d8cf4a8),[#13972](https://github.com/opencart/opencart/pull/13972/commits/e7890eac895c4935cf9be6e286f5c1fa211ac1c6).

## 2024.05.20
### Updated
- Installing symfony/deprecation-contracts (v2.5.3).
- Upgrading twig/twig (v3.8.0 => v3.10.3).
### Fixed
- [#13953](https://github.com/opencart/opencart/issues/13953).

## 2024.05.17
### Fixed
- Hide disabled custom fields when adding/editing orders in the admin.
- Display detailed information for errors in twig templates.

## 2024.04.15
### Fixed
- Hide disabled custom fields in the admin [#13858](https://github.com/opencart/opencart/issues/13858).
- Remove domain from language and currency cookies [#13849](https://github.com/opencart/opencart/pull/13849/commits/46970ce566f7ffa441ba353c5d8aefaf65afe385).

## 2024.04.10
### Fixed
- Minor changes in  payment_address.twig.
- Removal of obsolete event handler (ECB extension) [#13775](https://github.com/opencart/opencart/pull/13775/commits/7a71b8c5e36bfba880f590087a39201dc300a569#diff-49855eec2fcd5298019c055df0131f12b4b401fd2095a98d72177e410456efaf).
- Fixed an issue with saving in Summernote Code View [#13831](https://github.com/opencart/opencart/pull/13831/commits/239a61f76a2e9e1c16ca575ce99219ed75efa021).
- The "unlink" option for links in Summernote [#13823](https://github.com/opencart/opencart/pull/13823/commits/861c7df7292657cacd75fd60ba2da8863f67c939).

## 2024.03.02
### Fixed
- Currency cache [#13751](https://github.com/opencart/opencart/pull/13751/commits/458ed8fec2d5fc27b280316aaf7426c309719d3c)

## 2024.03.01
### Fixed
- Security patch [#13741](https://github.com/opencart/opencart/pull/13741/commits/08651484abd0c2dec2a1789e7017ef887cb86a65).
- Token generator [#13743](https://github.com/opencart/opencart/pull/13743/commits/c1cc995b02547339d9f6fdb897a6d877533f086d).
- Added cast to zone_id in setting [#13744](https://github.com/opencart/opencart/pull/13744/commits/518a3ed2bf07004cd95c6dbe8ad10e794709faca).
- Preventing the last admin account from being disabled [#13745](https://github.com/opencart/opencart/issues/13745).

## 2024.02.27
### Fixed
- Pagination [#13716](https://github.com/opencart/opencart/pull/13716), [#13732](https://github.com/opencart/opencart/pull/13732/commits).
- Support for Windows line endings. [#13734](https://github.com/opencart/opencart/pull/13734).

## 2024.02.24
### Fixed
- Timezone change breaking session and API [#13704](https://github.com/opencart/opencart/pull/13704/commits/43e43bab2b44228ae7c7b0ab5d241d93c3da7134).
- Missing escape to filter module [#13698](https://github.com/opencart/opencart/pull/13698/commits/c1e6c687e48e36ef10543a60ae3a432fc17233f4).
- Escaped line breaks in backup tool [#13709](https://github.com/opencart/opencart/pull/13709/commits/84e9f5100d8104655c7f7ff44286c69b155e6588).
- Improved security for account forgotten [#13710](https://github.com/opencart/opencart/pull/13710/commits/f1ff6c35bae0654e6f4600930842d32b3ffc8ad2).

## 2024.02.15
### Fixed
- Removing permissions.

## 2024.02.11
### Fixed
- Class definitions.
- Points variable type in `catalog/model/extension/total/reward.php`
- Cache control headers

## 2024.02.10
### Fixed
- phpstan level 1 issues
### Updated
- symfony/polyfill-ctype (v1.27.0 => v1.29.0)
- scssphp/scssphp (v1.11.0 => v1.12.1)
- symfony/polyfill-php80 (v1.27.0 => v1.29.0)
- symfony/polyfill-mbstring (v1.27.0 => v1.29.0)
- twig/twig (v3.6.1 => v3.8.0)
### Removed
- Removing symfony/validator (v4.4.48)
- Removing symfony/translation-contracts (v2.5.2)
- Removing symfony/polyfill-php72 (v1.27.0)
- Removing symfony/polyfill-intl-normalizer (v1.27.0)
- Removing symfony/polyfill-intl-idn (v1.27.0)
- Removing ralouphie/getallheaders (3.0.3)
- Removing psr/http-message (1.1)
- Removing guzzlehttp/psr7 (1.9.1)
- Removing guzzlehttp/promises (1.5.3)
- Removing guzzlehttp/oauth-subscriber (0.3.0)
- Removing guzzlehttp/guzzle (6.5.8)

## 2024.02.01
### Added
- phpstan 1.10.57
- Add helpers for guessing what classes magic model properties should resolve to [#e201199](https://github.com/opencart/opencart/commit/e20119971e7ee9dde7fe323eb7d1df2f6e281af6
### Fixed
- extensions uninstall fixes: remove permissions [#13602](https://github.com/opencart/opencart/pull/13602/)
### Updated
- `system/library/db/pgsql.php`

## 2024.01.14
### Added
-  Hint classes loaded during framework bootup [#13555](https://github.com/opencart/opencart/pull/13555/commits/c624084612e40fb372c2461e55d3bf4ff5a42a8c).
### Fixed
- Composer dependencies.

## 2024.01.10
### Fixed
- redundant writings to log

## 2024.01.09
### Fixed
- duplicate key in `system/config/admin.php`, template_code argument in `controller/admin/event/language.php missing` [#13483](https://github.com/opencart/opencart/pull/13483/commits/8feaecb2a85f7b452aa5989068f7c58c84e76bfe).
- missing return `system/config/admin.php`, template_code argument in `controller/admin/event/language.php missing` [#13482](https://github.com/opencart/opencart/pull/13482/commits/014673c33f2d67decdb9e68e7145d66fb67a1d5d).
- `admin/controller/startup/startup.php`, `catalog/controller/startup/startup.php`

## 2024.01.07
### Fixed
- $query customer model [#13445](https://github.com/opencart/opencart/pull/13445/commits/ed39c844f8dda2eb540411ff0d77f4e7f37643e3).
- Undefined variable: $data- upload model [#13436](https://github.com/opencart/opencart/pull/13436/commits/4e9217897756e9f53adfecab02c05a0121353253).
- Undefined variable: $data - router controller [#13439](https://github.com/opencart/opencart/pull/13439/commits/5742f0fd1a74a8459323f2b18e72eae6b6dcfd50).
- Caught class DB\mysqli_sql_exception not found. mysqli.php [#13432](https://github.com/opencart/opencart/pull/13432/commits/c26c891f8f587cf487ee40715a792131b258e603).
- Remove Ref check from proxy.php [#13426](https://github.com/opencart/opencart/pull/13426/commits/aa30271897f82bc5bfd6eb685510835fef75e4bd).
### Removed
- fraudlabspro extension.

## 2024.01.06
### Fixed
- Wrong use of concat in recurring.php [#47ccb9e](https://github.com/opencart/opencart/commit/47ccb9ec604acd8b4bd120b0ab6e24640c7dd1cb).
- Removed duplicated values from array - utf8 helper [#022415c](https://github.com/opencart/opencart/commit/022415cfa9c49145dd0cd154a9ecbdfcd1e248ea).

## 2023.12.08
### Fixed
- Redirect protection [PR #13095](https://github.com/opencart/opencart/pull/13095/commits/c6f546321c984ce89fcdd4af0ef86e5af6ce7e8d).
- Pagination bug in the Google Base extension [PR #13100](https://github.com/opencart/opencart/pull/13100/commits/f0b660ae6039a534cb0df72e3d9ad76feffd3caf).
- `.htaccess.txt` [PR #12910](https://github.com/opencart/opencart/pull/12910/commits/08e434355245d335d02c3b566559f9bc073e060f).

## 2023.11.28_2
### Fixed
- Added language variable 'text_no_results' for Manufacturer [PR #13030](https://github.com/opencart/opencart/pull/13030/commits/92fe313c594dded1980a4e3fe1228b93f021b659).
- Wrong message on Manufacturer List [PR #13029](https://github.com/opencart/opencart/pull/13029/commits/333d534bad96cd2c816e0a04c04fe4dde0a8ddb3).

## 2023.11.28
### Fixed
- `system/engine/action.php` preg_replace(): Passing null to parameter #3 ($subject) of type array|string is deprecated... [PR #13019](https://github.com/opencart/opencart/pull/13019/commits/03da248d50932f78fc82b84efc37ba1430f79a2b).
- Attribute automcomplete [PR #12990](https://github.com/opencart/opencart/pull/12990/commits/fa43add7c0646f14eea8ba04fe783c3c796a49bf).

## 2023.11.18
### Fixed
- `DB_PREFIX` [PR #12975](https://github.com/opencart/opencart/pull/12975/commits/09873d2052b003d27ec55da63e5b362d2dfb1eb4)
- `robots.txt`.

## 2023.11.14
### Fixed
- `opencart.sql` Typo related to the currency module permissions.

## 2023.11.03
### Fixed
- Leading space to prevent appending to the password restore link [PR #12223](https://github.com/opencart/opencart/pull/12223/commits/975cffca9866518aa5c3101dcc49d92c1d9f40aa).
- Currency rates refresh [#888f819](https://github.com/opencart/opencart/commit/888f819cfe79d7eace05c400a4beed1328c8ae0d).

## 2023.10.16
### Changed
- Synced with the [3.0.3.9](https://github.com/ocmod-space/opencart/releases/tag/3.0.3.9) release.
### Fixed
- Minor errors and typos.

## 2023.09.22
### Fixed
- Error caused by voucher order because it has not shipping country.

## 2023.09.05
### Fixed
- Fixed error displaying guest shipping [PR #12672](https://github.com/opencart/opencart/pull/12672).

## 2023.08.30
### Fixed
- Update translation_form.twig [PR #12640](https://github.com/opencart/opencart/pull/12640).

## 2023.08.02
### Updated
- `oc_zone` table - added tax enclave entries for Germany, Swiss, Austria and Greece into the zone table.

## 2023.07.23
### Fixed
- Deprecation error fixes [PR #12519](https://github.com/opencart/opencart/pull/12519).

## 2023.07.13
### Fixed
- Filemanager [PR #12491](https://github.com/opencart/opencart/pull/12491).

## 2023.07.10
### Fixed
- Bootstrap popover [PR #12463](https://github.com/opencart/opencart/pull/12463).

## 2023.07.05
### Fixed
- Fix the admin map when the payment address is disabled [#4b2e195](https://github.com/opencartbot/opencart/commit/4b2e195ba0e1a15fd1fc49e32ab4ff8d9316d419).

## 2023.07.03
### Changed
- Twig docs link [PR #12156](https://github.com/opencart/opencart/pull/12156).

## 2023.06.27_2
### Changed
- Version in admin to 3.0.x.x.

## 2023.06.27
### Updated
- Bootstrap to 3.4.1.
- jQuery to 3.7.0.
- Vendor libraries.

## 2023.06.24
### Fixed
- Fixed SMTP line lengths [PR #12384](https://github.com/opencart/opencart/pull/12384).
- Match summernote editor default fontsize with the ones on the corresponding frontend pages [PR #12385](https://github.com/opencart/opencart/pull/12385).

## 2023.06.05
### Removed
- No more AddThis services, see at https://www.addthis.com/.

## 2023.05.29
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

## 2023.04.29
### Fixed
- PHP files was beautifed to meet the [coding standards](https://github.com/opencart/opencart/wiki/Coding-standards).
### Changed
- `admin/controller/extension/extension/promotion.php` extension reworked to dummy.
### Removed
- Google shopping, 3rd-party payment and shipping modules (see ./deleted.txt).
