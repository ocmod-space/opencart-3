# Change log (3.0.x.x)

## 2023.11.18_1 [#78d735f](https://github.com/opencart/opencart/commit/78d735f36e43dfbba61319ab8dcd32ce57b7724f)
### Fixed
- DB_PREFIX [PR #12975](https://github.com/opencart/opencart/pull/12975/commits/09873d2052b003d27ec55da63e5b362d2dfb1eb4)
- robots.txt

## 2023.11.14_1 [#b2bb6f0](https://github.com/opencart/opencart/commit/b2bb6f07a8f9c53639f708933b8c6cef14631b95)
### Fixed
- typo in `opencart.sql` related to the currency module permissions

## 2023.11.03_1 [#b2bb6f0](https://github.com/opencart/opencart/commit/b2bb6f07a8f9c53639f708933b8c6cef14631b95)
### Fixed
- Leading space to prevent appending to the password restore link [PR #12223](https://github.com/opencart/opencart/pull/12223/commits/975cffca9866518aa5c3101dcc49d92c1d9f40aa).
- Currency rates refresh [#888f819](https://github.com/opencart/opencart/commit/888f819cfe79d7eace05c400a4beed1328c8ae0d).

## 2023.10.16_1 [#cfae395](https://github.com/opencart/opencart/commit/cfae395219c070b132cc10aa9522ad9b052d52e5)
### Changed
- Synced with the [3.0.3.9](https://github.com/ocmod-space/opencart/releases/tag/3.0.3.9) release
### Fixed
- Minor errors and typos.

## 2023.09.22_1 [#30735b3](https://github.com/opencart/opencart/commit/30735b314f953ffdf582e57aba1387fc6c0050ab)
### Fixed
- Error caused by voucher order because it has not shipping country.

## 2023.09.05_1 [#30735b3](https://github.com/opencart/opencart/commit/30735b314f953ffdf582e57aba1387fc6c0050ab)
### Fixed
- Fixed error displaying guest shipping [PR #12672](https://github.com/opencart/opencart/pull/12672)

## 2023.08.30_1 [#30735b3](https://github.com/opencart/opencart/commit/30735b314f953ffdf582e57aba1387fc6c0050ab)
### Fixed
- Update translation_form.twig [PR #12640](https://github.com/opencart/opencart/pull/12640)

## 2023.08.02_1 [#299283a](https://github.com/opencart/opencart/commit/299283a8f1dc5d91e0534729ba0678a8ec82996c)
### Updated
- `oc_zone` table - added tax enclave entries for Germany, Swiss, Austria and Greece into the zone table.

## 2023.07.23_1 [#299283a](https://github.com/opencart/opencart/commit/299283a8f1dc5d91e0534729ba0678a8ec82996c)
### Fixed
- deprecation error fixes [PR #12519](https://github.com/opencart/opencart/pull/12519)

## 2023.07.13_1 [#e722a90](https://github.com/opencart/opencart/commit/e722a901520c359347104d5a63869a597bcdaf33)
### Fixed
- Filemanager [PR #12491](https://github.com/opencart/opencart/pull/12491)

## 2023.07.10_1 [#cb03189](https://github.com/opencart/opencart/commit/cb03189aca150337be0668193199897de4bb01e6)
### Fixed
- Bootstrap popover [PR #12463](https://github.com/opencart/opencart/pull/12463)

## 2023.07.05_1 [#1da13c6](https://github.com/opencart/opencart/commit/1da13c63a99dd9e8a2ee35e004874925363ed6bd)
### Fixed
- Fix the admin map when the payment address is disabled [#4b2e195](https://github.com/opencartbot/opencart/commit/4b2e195ba0e1a15fd1fc49e32ab4ff8d9316d419)

## 2023.07.03_1 [#1da13c6](https://github.com/opencart/opencart/commit/1da13c63a99dd9e8a2ee35e004874925363ed6bd)
### Changed
- Twig docs link [PR #12156](https://github.com/opencart/opencart/pull/12156)

## 2023.06.27_2 [#7423db3](https://github.com/opencart/opencart/commit/7423db3e1c86f041a6560d56dc6e0bfc57f94ba9)
### Changed
- Version in admin to 3.0.x.x

## 2023.06.27_1 [#7423db3](https://github.com/opencart/opencart/commit/7423db3e1c86f041a6560d56dc6e0bfc57f94ba9)
### Updated
- Bootstrap to 3.4.1
- jQuery to 3.7.0
- Vendor libraries

## 2023.06.24_1
### Fixed
- Fixed SMTP line lengths [PR #12384](https://github.com/opencart/opencart/pull/12384)
- Match summernote editor default fontsize with the ones on the corresponding frontend pages [PR #12385](https://github.com/opencart/opencart/pull/12385)

## 2023.06.05_1 [#fd7e99c](https://github.com/opencart/opencart/commit/fd7e99cd23a96b55043b1ac14155c2525de05faa)
### Removed
- No more AddThis services, see at https://www.addthis.com/

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
- Google shopping, 3rd-party payment and shipping modules (see ./deleted.txt)
