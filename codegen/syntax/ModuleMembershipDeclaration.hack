/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<e404da06ee7706b8c7dd7147fd33595a>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;
use namespace HH\Lib\Dict;
/* HHAST_IGNORE_ALL[5607] 5607 is ignored because of false positives when comparing a generic to a typed value */
/* HHAST_IGNORE_ALL[5624] HHAST_IGNORE_ALL[5639] 5624 and 5639 are ignored because they insist on using co(tra)variant generics. Could this break external consumers? */

<<__ConsistentConstruct>>
final class ModuleMembershipDeclaration extends Node {

  const string SYNTAX_KIND = 'module_membership_declaration';

  private ModuleToken $_module_keyword;
  private NameToken $_name;
  private SemicolonToken $_semicolon;

  public function __construct(
    ModuleToken $module_keyword,
    NameToken $name,
    SemicolonToken $semicolon,
    ?__Private\SourceRef $source_ref = null,
  ) {
    $this->_module_keyword = $module_keyword;
    $this->_name = $name;
    $this->_semicolon = $semicolon;
    parent::__construct($source_ref);
  }

  <<__Override>>
  public static function fromJSON(
    dict<arraykey, mixed> $json,
    string $file,
    int $initial_offset,
    string $source,
    string $_type_hint,
  ): this {
    $offset = $initial_offset;
    $module_keyword = Node::fromJSON(
      ($json['module_membership_declaration_module_keyword']) as dict<_, _>,
      $file,
      $offset,
      $source,
      'ModuleToken',
    );
    $module_keyword = $module_keyword as nonnull;
    $offset += $module_keyword->getWidth();
    $name = Node::fromJSON(
      ($json['module_membership_declaration_name']) as dict<_, _>,
      $file,
      $offset,
      $source,
      'NameToken',
    );
    $name = $name as nonnull;
    $offset += $name->getWidth();
    $semicolon = Node::fromJSON(
      ($json['module_membership_declaration_semicolon']) as dict<_, _>,
      $file,
      $offset,
      $source,
      'SemicolonToken',
    );
    $semicolon = $semicolon as nonnull;
    $offset += $semicolon->getWidth();
    $source_ref = shape(
      'file' => $file,
      'source' => $source,
      'offset' => $initial_offset,
      'width' => $offset - $initial_offset,
    );
    return new static(
      /* HH_IGNORE_ERROR[4110] */ $module_keyword,
      /* HH_IGNORE_ERROR[4110] */ $name,
      /* HH_IGNORE_ERROR[4110] */ $semicolon,
      $source_ref,
    );
  }

  <<__Override>>
  public function getChildren(): dict<string, Node> {
    return dict[
      'module_keyword' => $this->_module_keyword,
      'name' => $this->_name,
      'semicolon' => $this->_semicolon,
    ]
      |> Dict\filter_nulls($$);
  }

  <<__Override>>
  public function rewriteChildren<Tret as ?Node>(
    (function(Node, vec<Node>): Tret) $rewriter,
    vec<Node> $parents = vec[],
  ): this {
    $parents[] = $this;
    $module_keyword = $rewriter($this->_module_keyword, $parents);
    $name = $rewriter($this->_name, $parents);
    $semicolon = $rewriter($this->_semicolon, $parents);
    if (
      $module_keyword === $this->_module_keyword &&
      $name === $this->_name &&
      $semicolon === $this->_semicolon
    ) {
      return $this;
    }
    return new static(
      $module_keyword as ModuleToken,
      $name as NameToken,
      $semicolon as SemicolonToken,
    );
  }

  public function getModuleKeywordUNTYPED(): ?Node {
    return $this->_module_keyword;
  }

  public function withModuleKeyword(ModuleToken $value): this {
    if ($value === $this->_module_keyword) {
      return $this;
    }
    return new static($value, $this->_name, $this->_semicolon);
  }

  public function hasModuleKeyword(): bool {
    return true;
  }

  /**
   * @return ModuleToken
   */
  public function getModuleKeyword(): ModuleToken {
    return TypeAssert\instance_of(ModuleToken::class, $this->_module_keyword);
  }

  /**
   * @return ModuleToken
   */
  public function getModuleKeywordx(): ModuleToken {
    return $this->getModuleKeyword();
  }

  public function getNameUNTYPED(): ?Node {
    return $this->_name;
  }

  public function withName(NameToken $value): this {
    if ($value === $this->_name) {
      return $this;
    }
    return new static($this->_module_keyword, $value, $this->_semicolon);
  }

  public function hasName(): bool {
    return true;
  }

  /**
   * @return NameToken
   */
  public function getName(): NameToken {
    return TypeAssert\instance_of(NameToken::class, $this->_name);
  }

  /**
   * @return NameToken
   */
  public function getNamex(): NameToken {
    return $this->getName();
  }

  public function getSemicolonUNTYPED(): ?Node {
    return $this->_semicolon;
  }

  public function withSemicolon(SemicolonToken $value): this {
    if ($value === $this->_semicolon) {
      return $this;
    }
    return new static($this->_module_keyword, $this->_name, $value);
  }

  public function hasSemicolon(): bool {
    return true;
  }

  /**
   * @return SemicolonToken
   */
  public function getSemicolon(): SemicolonToken {
    return TypeAssert\instance_of(SemicolonToken::class, $this->_semicolon);
  }

  /**
   * @return SemicolonToken
   */
  public function getSemicolonx(): SemicolonToken {
    return $this->getSemicolon();
  }
}
