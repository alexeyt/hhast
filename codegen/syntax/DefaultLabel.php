<?hh
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<02d247baa4bdc162919a5fd24fdafb84>>
 */
namespace Facebook\HHAST;
use type Facebook\TypeAssert\TypeAssert;

final class DefaultLabel extends EditableSyntax {

  private EditableSyntax $_keyword;
  private EditableSyntax $_colon;

  public function __construct(EditableSyntax $keyword, EditableSyntax $colon) {
    parent::__construct('default_label');
    $this->_keyword = $keyword;
    $this->_colon = $colon;
  }

  public static function from_json(
    array<string, mixed> $json,
    int $position,
    string $source,
  ): this {
    $keyword = EditableSyntax::from_json(
      /* UNSAFE_EXPR */ $json['default_keyword'],
      $position,
      $source,
    );
    $position += $keyword->width();
    $colon = EditableSyntax::from_json(
      /* UNSAFE_EXPR */ $json['default_colon'],
      $position,
      $source,
    );
    $position += $colon->width();
    return new self($keyword, $colon);
  }

  public function children(): KeyedTraversable<string, EditableSyntax> {
    yield 'keyword' => $this->_keyword;
    yield 'colon' => $this->_colon;
  }

  public function rewrite_children(
    self::TRewriter $rewriter,
    ?Traversable<EditableSyntax> $parents = null,
  ): this {
    $parents = $parents === null ? vec[] : vec($parents);
    $parents[] = $this;
    $keyword = $this->_keyword->rewrite($rewriter, $parents);
    $colon = $this->_colon->rewrite($rewriter, $parents);
    if (
      $keyword === $this->_keyword &&
      $colon === $this->_colon
    ) {
      return $this;
    }
    return new self($keyword, $colon);
  }

  public function getKeywordUNTYPED(): EditableSyntax {
    return $this->_keyword;
  }

  public function with_keyword(EditableSyntax $value): this {
    if ($value === $this->_keyword) {
      return $this;
    }
    return new self($value, $this->_colon);
  }

  public function hasKeyword(): bool {
    return !$this->_keyword->is_missing();
  }

  public function getKeyword(): DefaultToken {
    return TypeAssert::isInstanceOf(DefaultToken::class, $this->_keyword);
  }

  public function getColonUNTYPED(): EditableSyntax {
    return $this->_colon;
  }

  public function with_colon(EditableSyntax $value): this {
    if ($value === $this->_colon) {
      return $this;
    }
    return new self($this->_keyword, $value);
  }

  public function hasColon(): bool {
    return !$this->_colon->is_missing();
  }

  public function getColon(): EditableSyntax {
    return TypeAssert::isInstanceOf(EditableSyntax::class, $this->_colon);
  }
}
