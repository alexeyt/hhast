<?hh
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<f294eabf3ea4c69401335cb7fe638f88>>
 */
namespace Facebook\HHAST;
use type Facebook\TypeAssert\TypeAssert;

final class TupleTypeSpecifier extends EditableSyntax {

  private EditableSyntax $_left_paren;
  private EditableSyntax $_types;
  private EditableSyntax $_right_paren;

  public function __construct(
    EditableSyntax $left_paren,
    EditableSyntax $types,
    EditableSyntax $right_paren,
  ) {
    parent::__construct('tuple_type_specifier');
    $this->_left_paren = $left_paren;
    $this->_types = $types;
    $this->_right_paren = $right_paren;
  }

  public static function from_json(
    array<string, mixed> $json,
    int $position,
    string $source,
  ): this {
    $left_paren = EditableSyntax::from_json(
      /* UNSAFE_EXPR */ $json['tuple_left_paren'],
      $position,
      $source,
    );
    $position += $left_paren->width();
    $types = EditableSyntax::from_json(
      /* UNSAFE_EXPR */ $json['tuple_types'],
      $position,
      $source,
    );
    $position += $types->width();
    $right_paren = EditableSyntax::from_json(
      /* UNSAFE_EXPR */ $json['tuple_right_paren'],
      $position,
      $source,
    );
    $position += $right_paren->width();
    return new self($left_paren, $types, $right_paren);
  }

  public function children(): KeyedTraversable<string, EditableSyntax> {
    yield 'left_paren' => $this->_left_paren;
    yield 'types' => $this->_types;
    yield 'right_paren' => $this->_right_paren;
  }

  public function rewrite_children(
    self::TRewriter $rewriter,
    ?Traversable<EditableSyntax> $parents = null,
  ): this {
    $parents = $parents === null ? vec[] : vec($parents);
    $parents[] = $this;
    $left_paren = $this->_left_paren->rewrite($rewriter, $parents);
    $types = $this->_types->rewrite($rewriter, $parents);
    $right_paren = $this->_right_paren->rewrite($rewriter, $parents);
    if (
      $left_paren === $this->_left_paren &&
      $types === $this->_types &&
      $right_paren === $this->_right_paren
    ) {
      return $this;
    }
    return new self($left_paren, $types, $right_paren);
  }

  public function raw_left_paren(): EditableSyntax {
    return $this->_left_paren;
  }

  public function with_left_paren(EditableSyntax $value): this {
    if ($value === $this->_left_paren) {
      return $this;
    }
    return new self($value, $this->_types, $this->_right_paren);
  }

  public function hasLeftParen(): bool {
    return !$this->_left_paren->is_missing();
  }

  public function left_paren(): LeftParenToken {
    return TypeAssert::isInstanceOf(LeftParenToken::class, $this->_left_paren);
  }

  public function raw_types(): EditableSyntax {
    return $this->_types;
  }

  public function with_types(EditableSyntax $value): this {
    if ($value === $this->_types) {
      return $this;
    }
    return new self($this->_left_paren, $value, $this->_right_paren);
  }

  public function hasTypes(): bool {
    return !$this->_types->is_missing();
  }

  public function types(): EditableList {
    return TypeAssert::isInstanceOf(EditableList::class, $this->_types);
  }

  public function raw_right_paren(): EditableSyntax {
    return $this->_right_paren;
  }

  public function with_right_paren(EditableSyntax $value): this {
    if ($value === $this->_right_paren) {
      return $this;
    }
    return new self($this->_left_paren, $this->_types, $value);
  }

  public function hasRightParen(): bool {
    return !$this->_right_paren->is_missing();
  }

  public function right_paren(): RightParenToken {
    return TypeAssert::isInstanceOf(RightParenToken::class, $this->_right_paren);
  }
}